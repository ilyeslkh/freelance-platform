<?php

namespace App\Controller;

use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Job;
use App\Form\JobType;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\EmailService;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\JobApplication;
use App\Form\JobApplicationType;



class JobController extends AbstractController {
    #[Route('/jobs', name: 'job_list')]
    public function list(JobRepository $jobRepository): Response {
        // Vérification si l'utilisateur est connecté
        if (!$this->getUser()) {
                return $this->redirectToRoute('app_login'); // Redirige vers la page de connexion
        }
        $jobs = $jobRepository->findAll();

        return $this->render('job/list.html.twig', [
            'jobs' => $jobs,
        ]);
    }

    #[Route('/jobs/new', name: 'job_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, EmailService $emailService): Response
    {
        // Restreindre l'accès aux utilisateurs connectés
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $job = new Job();
        $form = $this->createForm(JobType::class, $job);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $job->setUserJob($this->getUser());
            $entityManager->persist($job);
            $entityManager->flush();

            // Envoi d'email de confirmation de création
            $emailService->sendEmail(
                $this->getUser()->getEmail(),
                'Job publié avec succès',
                sprintf(
                    'Bonjour %s, votre annonce "%s" a été publiée avec succès.',
                    $this->getUser()->getUsername(),
                    $job->getTitle()
                )
            );

            $this->addFlash('success', 'Votre annonce a été créée avec succès.');
            return $this->redirectToRoute('job_list');
        }

        return $this->render('job/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }



    #[Route('/jobs/{id}/delete', name: 'job_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Job $job, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est administrateur ou le créateur du job
        if (!$this->isGranted('ROLE_ADMIN') && $job->getUserJob() !== $user) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à supprimer cette annonce.');
            return $this->redirectToRoute('job_list');
        }

        $entityManager->remove($job);
        $entityManager->flush();

        $this->addFlash('success', 'L\'annonce a été supprimée avec succès.');
        return $this->redirectToRoute('job_list');
    }


    #[Route('/jobs/{id}', name: 'job_detail', requirements: ['id' => '\d+'])]
    public function detail(Job $job, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
    
        // Si l'utilisateur est connecté et ce n'est pas son propre job, on prépare le formulaire
        $applicationForm = null;
    
        if ($user && $job->getUserJob() !== $user) {
            $application = new JobApplication();
            $form = $this->createForm(JobApplicationType::class, $application);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $application->setApplicant($user);
                $application->setJob($job);
                $application->setAppliedAt(new \DateTime());
    
                $entityManager->persist($application);
                $entityManager->flush();
    
                $this->addFlash('success', 'Votre candidature a été envoyée avec succès.');
    
                return $this->redirectToRoute('job_detail', ['id' => $job->getId()]);
            }
    
            $applicationForm = $form->createView();
        }
    
        return $this->render('job/detail.html.twig', [
            'job' => $job,
            'applicationForm' => $applicationForm, // Formulaire ou null
        ]);
    }
    

    #[Route('/jobs/{id}/apply', name: 'job_apply', methods: ['GET', 'POST'])]
    public function apply(Job $job, Request $request, EntityManagerInterface $entityManager, EmailService $emailService): Response
    {
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour postuler à une annonce.');
            return $this->redirectToRoute('app_login');
        }

        if ($job->getUserJob() === $user) {
            $this->addFlash('error', 'Vous ne pouvez pas postuler à votre propre annonce.');
            return $this->redirectToRoute('job_detail', ['id' => $job->getId()]);
        }

        $application = new JobApplication();
        $form = $this->createFormBuilder($application)
            ->add('message', TextType::class, [
                'label' => 'Votre message',
                'attr' => ['class' => 'form-control'],
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $application->setApplicant($user);
            $application->setJob($job);
            $application->setAplliedAt(new \DateTime());

            $entityManager->persist($application);
            $entityManager->flush();

            // Envoyez un email de confirmation au candidat
            $emailService->sendEmail(
                $user->getEmail(),
                'Votre candidature a été envoyée',
                sprintf(
                    'Bonjour %s, votre candidature pour l\'annonce "%s" a été envoyée avec succès.',
                    $user->getUsername(),
                    $job->getTitle()
                )
            );

            $this->addFlash('success', 'Votre candidature a été envoyée avec succès.');
            return $this->redirectToRoute('job_detail', ['id' => $job->getId()]);
        }

        return $this->render('job/detail.html.twig', [
            'job' => $job,
            'applicationForm' => $form->createView(),
        ]);
    }



    #[Route('/jobs/application/{id}/accept', name: 'job_application_accept', methods: ['POST'])]
    public function acceptApplication(
        JobApplication $jobApplication,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): Response {
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est propriétaire du job
        if ($jobApplication->getJob()->getUserJob() !== $user) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas accepter cette candidature.');
        }

        // Mettez à jour le statut
        $jobApplication->setStatus('accepted');
        $entityManager->flush();

        // Envoyez un email au candidat
        $emailService->sendEmail(
            $jobApplication->getApplicant()->getEmail(),
            'Votre candidature a été acceptée',
            sprintf(
                'Bonjour %s, votre candidature pour l\'annonce "%s" a été acceptée.',
                $jobApplication->getApplicant()->getUsername(),
                $jobApplication->getJob()->getTitle()
            )
        );

        $this->addFlash('success', 'La candidature a été acceptée.');
        return $this->redirectToRoute('job_detail', ['id' => $jobApplication->getJob()->getId()]);
    }

    #[Route('/jobs/application/{id}/reject', name: 'job_application_reject', methods: ['POST'])]
    public function rejectApplication(
        JobApplication $jobApplication,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): Response {
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est propriétaire du job
        if ($jobApplication->getJob()->getUserJob() !== $user) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas refuser cette candidature.');
        }

        // Mettez à jour le statut
        $jobApplication->setStatus('rejected');
        $entityManager->flush();

        // Envoyez un email au candidat
        $emailService->sendEmail(
            $jobApplication->getApplicant()->getEmail(),
            'Votre candidature a été refusée',
            sprintf(
                'Bonjour %s, votre candidature pour l\'annonce "%s" a été refusée.',
                $jobApplication->getApplicant()->getUsername(),
                $jobApplication->getJob()->getTitle()
            )
        );

        $this->addFlash('success', 'La candidature a été refusée.');
        return $this->redirectToRoute('job_detail', ['id' => $jobApplication->getJob()->getId()]);
    }






    

}