<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\EmailService;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;



class ServiceController extends AbstractController
{
    #[Route('/services', name: 'service_list')]
    public function list(ServiceRepository $serviceRepository, Request $request): Response
    {
        $page = max(1, (int) $request->query->get('page', 1)); // Numéro de la page actuelle
        $limit = 6; // Nombre de services par page

        // Récupérer les services paginés
        $services = $serviceRepository->findPaginated($page, $limit);

        return $this->render('service/list.html.twig', [
            'services' => $services,
        ]);
    }


    #[Route('/service/new', name: 'service_new')]
    public function new(Request $request, EntityManagerInterface $em, EmailService $emailService): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY'); // Assurez-vous que l'utilisateur est connecté
    
        $service = new Service();
        $service->setCreatedAt(new \DateTime());
        $service->setUserService($this->getUser());
    
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($service);
            $em->flush();
    
            // Vérifiez si l'utilisateur existe avant d'envoyer l'email
            $user = $this->getUser();
            if ($user) {
                $emailService->sendEmail(
                    $user->getEmail(),
                    'Service créé avec succès',
                    sprintf(
                        'Bonjour %s, votre service "%s" a été créé avec succès.',
                        $user->getUsername(),
                        $service->getTitle()
                    )
                );
            }
    
            $this->addFlash('success', 'Service créé avec succès.');
            return $this->redirectToRoute('service_list');
        }
        
    
        return $this->render('service/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    #[Route('/service/delete/{id}', name: 'service_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(int $id, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $service = $em->getRepository(Service::class)->find($id);

        if (!$service) {
            throw $this->createNotFoundException('Service non trouvé.');
        }

        // Vérifiez si l'utilisateur connecté est un admin ou le propriétaire du service
        if (!$this->isGranted('ROLE_ADMIN') && $service->getUserService() !== $this->getUser()) {
            // Message flash pour indiquer qu'ils n'ont pas l'autorisation
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à supprimer ce service.');
            return $this->redirectToRoute('service_list');
        }

        $em->remove($service);
        $em->flush();

        $this->addFlash('success', 'Service supprimé avec succès.');
        return $this->redirectToRoute('service_list');
    }

    #[Route('/service/{id}', name: 'service_detail')]
    public function detail(int $id, EntityManagerInterface $entityManager): Response
    {
        $service = $entityManager->getRepository(Service::class)->find($id);

        if (!$service) {
            throw $this->createNotFoundException('Service non trouvé.');
        }

        return $this->render('service/detail.html.twig', [
            'service' => $service,
        ]);
    }

        

    #[Route('/service/{id}/reserve', name: 'service_reserve')]
    public function reserve(
        int $id,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): Response {
        $user = $this->getUser(); // Récupérer l'utilisateur connecté
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour réserver un service.');
            return $this->redirectToRoute('app_login');
        }

        // Récupérer le service
        $service = $entityManager->getRepository(Service::class)->find($id);

        if (!$service) {
            throw $this->createNotFoundException('Service non trouvé.');
        }

        // Vérifier si l'utilisateur essaie de réserver son propre service
        if ($service->getUserService() === $user) {
            $this->addFlash('error', 'Vous ne pouvez pas réserver votre propre service.');
            return $this->redirectToRoute('service_detail', ['id' => $id]);
        }

        // Vérifier si le service est déjà réservé
        $existingReservation = $entityManager->getRepository(Reservation::class)
            ->findOneBy(['service' => $service]);

        if ($existingReservation) {
            $this->addFlash('error', 'Ce service a déjà été réservé.');
            return $this->redirectToRoute('service_detail', ['id' => $id]);
        }

        // Créer une nouvelle réservation
        $reservation = new Reservation();
        $reservation->setService($service);
        $reservation->setReservedBy($user);
        $reservation->setReservedAt(new \DateTimeImmutable());

        $entityManager->persist($reservation);
        $entityManager->flush();

        // Envoyer un email au créateur du service
        $emailService->sendEmail(
            $service->getUserService()->getEmail(),
            'Nouvelle réservation pour votre service',
            sprintf(
                'Bonjour, votre service "%s" a été réservé par %s.',
                $service->getTitle(),
                $user->getUsername()
            )
        );

        // Envoyer un email à l'utilisateur qui a réservé
        $emailService->sendEmail(
            $user->getEmail(),
            'Confirmation de réservation',
            sprintf(
                'Bonjour %s, vous avez réservé le service "%s".',
                $user->getUsername(),
                $service->getTitle()
            )
    );

    // Message flash et redirection
    $this->addFlash('success', 'Réservation effectuée avec succès.');
    return $this->redirectToRoute('dashboard');
}

    #[Route('/service/{id}/checkout', name: 'service_checkout')]
    public function checkout(Service $service): Response
    {
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));
    
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $service->getTitle(),
                    ],
                    'unit_amount' => $service->getPrice() * 100, // Convertir en centimes
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
    
        return $this->redirect($session->url, 303);
    }
    

    #[Route('/payment-success', name: 'payment_success')]
    public function paymentSuccess(): Response
    {
        $this->addFlash('success', 'Paiement réussi ! Merci pour votre achat.');
        return $this->redirectToRoute('service_list');
    }

    #[Route('/payment-cancel', name: 'payment_cancel')]
    public function paymentCancel(): Response
    {
        $this->addFlash('error', 'Paiement annulé. Veuillez réessayer.');
        return $this->redirectToRoute('service_list');
    }



}
