<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Service;
use App\Entity\Job;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/admin', name: 'admin_dashboard')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/index.html.twig');
    }

    #[Route('/admin/users', name: 'admin_manage_users')]
    public function manageUsers(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Récupérez tous les utilisateurs
        $users = $this->entityManager->getRepository(User::class)->findAll();

        return $this->render('admin/manage_users.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/admin/services', name: 'admin_manage_services')]
    public function manageServices(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Récupérez tous les services
        $services = $this->entityManager->getRepository(Service::class)->findAll();

        return $this->render('admin/manage_services.html.twig', [
            'services' => $services,
        ]);
    }

    #[Route('/admin/jobs', name: 'admin_manage_jobs')]
    public function manageJobs(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Récupérez toutes les annonces
        $jobs = $this->entityManager->getRepository(Job::class)->findAll();

        return $this->render('admin/manage_jobs.html.twig', [
            'jobs' => $jobs,
        ]);
    }

    #[Route('/admin/services/delete/{id}', name: 'admin_delete_service', methods: ['POST'])]
    public function deleteService(Service $service, EntityManagerInterface $em, Request $request): Response
    {
        // Vérifiez le rôle de l'utilisateur
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Vérifiez le jeton CSRF
        if ($this->isCsrfTokenValid('delete_service_' . $service->getId(), $request->request->get('_token'))) {
            $em->remove($service);
            $em->flush();

            $this->addFlash('success', 'Le service a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Le jeton CSRF est invalide.');
        }

        return $this->redirectToRoute('admin_manage_services');
    }
}
