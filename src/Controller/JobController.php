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


class JobController extends AbstractController {
    #[Route('/jobs', name: 'job_list')]
    public function list(JobRepository $jobRepository): Response {
        $jobs = $jobRepository->findAll();

        return $this->render('job/list.html.twig', [
            'jobs' => $jobs,
        ]);
    }

    #[Route('/jobs/new', name: 'job_create')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $job = new Job();
        $form = $this->createForm(JobType::class, $job);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $job->setUserJob($this->getUser());
            $entityManager->persist($job);
            $entityManager->flush();

            return $this->redirectToRoute('job_list');
        }

        return $this->render('job/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }   

}
