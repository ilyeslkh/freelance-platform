<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Repository\ServiceRepository;
use App\Repository\JobApplicationRepository;
use App\Services\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(
        ReservationRepository $reservationRepository,
        ServiceRepository $serviceRepository,
        JobApplicationRepository $jobApplicationRepository // Repository pour les candidatures
    ): Response {
        $user = $this->getUser();
    
        // Réservations des services créés par l'utilisateur
        $reservations = $reservationRepository->createQueryBuilder('r')
            ->join('r.service', 's')
            ->where('s.userService = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    
        // Services créés par l'utilisateur
        $createdServices = $serviceRepository->findBy(['userService' => $user]);
    
        // Réservations effectuées par l'utilisateur
        $userReservations = $reservationRepository->findBy(['reservedBy' => $user]);
    
        // Candidatures envoyées par l'utilisateur
        $userApplications = $jobApplicationRepository->findBy(['applicant' => $user]);
    
        // Candidatures reçues pour les annonces créées par l'utilisateur
        $receivedApplications = $jobApplicationRepository->createQueryBuilder('a')
            ->join('a.job', 'j')
            ->where('j.userJob = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    
        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'reservations' => $reservations,
            'createdServices' => $createdServices,
            'userReservations' => $userReservations,
            'userApplications' => $userApplications,
            'receivedApplications' => $receivedApplications, // Ajout des candidatures reçues
        ]);
    }
    

    #[Route('/reservation/{id}/accept', name: 'reservation_accept', methods: ['POST'])]
    public function acceptReservation(
        Reservation $reservation,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): Response {
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est autorisé à accepter la réservation
        if ($reservation->getService()->getUserService() !== $user) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas accepter cette réservation.');
        }

        // Met à jour le statut de la réservation
        $reservation->setStatus('accepted');
        $entityManager->flush();

        // Envoie un email à l'utilisateur qui a réservé
        $emailService->sendEmail(
            $reservation->getReservedBy()->getEmail(),
            'Réservation acceptée',
            sprintf(
                'Bonjour %s, votre réservation pour le service "%s" a été acceptée.',
                $reservation->getReservedBy()->getUsername(),
                $reservation->getService()->getTitle()
            )
        );

        $this->addFlash('success', 'La réservation a été acceptée.');
        return $this->redirectToRoute('dashboard');
    }

    #[Route('/reservation/{id}/reject', name: 'reservation_reject', methods: ['POST'])]
    public function rejectReservation(
        Reservation $reservation,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): Response {
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est autorisé à refuser la réservation
        if ($reservation->getService()->getUserService() !== $user) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas refuser cette réservation.');
        }

        // Met à jour le statut de la réservation
        $reservation->setStatus('rejected');
        $entityManager->flush();

        // Envoie un email à l'utilisateur qui a réservé
        $emailService->sendEmail(
            $reservation->getReservedBy()->getEmail(),
            'Réservation refusée',
            sprintf(
                'Bonjour %s, votre réservation pour le service "%s" a été refusée.',
                $reservation->getReservedBy()->getUsername(),
                $reservation->getService()->getTitle()
            )
        );

        $this->addFlash('success', 'La réservation a été refusée.');
        return $this->redirectToRoute('dashboard');
    }
}
