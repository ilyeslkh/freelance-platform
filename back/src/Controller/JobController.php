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

    #[Route('/jobs/new', name: 'job_create')]
    public function create(Request $request, EntityManagerInterface $entityManager, EmailService $emailService): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $job = new Job();
        $form = $this->createForm(JobType::class, $job);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $job->setUserJob($this->getUser());
            $entityManager->persist($job);
            $entityManager->flush();

            // Envoi d'email
            $emailService->sendEmail(
                $this->getUser()->getEmail(),
                'Job publié avec succès',
                sprintf(
                    'Bonjour %s, votre annonce "%s" a été publiée avec succès.',
                    $this->getUser()->getUsername(),
                    $job->getTitle()
                )
            );

            return $this->redirectToRoute('job_list');
        }

        return $this->render('job/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/jobs/delete/{id}', name: 'job_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Job $job, EntityManagerInterface $entityManager): Response {
        // Vérifiez si l'utilisateur est administrateur ou a créé le job
        if (!$this->isGranted('ROLE_ADMIN') && $job->getUserJob() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas supprimer ce job.');
        }

        $entityManager->remove($job);
        $entityManager->flush();

        $this->addFlash('success', 'Le job a été supprimé avec succès.');
        return $this->redirectToRoute('job_list');
    }

    #[Route('/jobs/{id}', name: 'job_detail', requirements: ['id' => '\d+'])]
    public function detail(Job $job): Response {
        return $this->render('job/detail.html.twig', [
            'job' => $job,
        ]);
    }




    

}