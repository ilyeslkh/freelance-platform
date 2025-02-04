<?php

namespace App\Controller;

use App\Repository\FreelancerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Freelancer;

class FreelancerController extends AbstractController
{
    #[Route('/freelancers', name: 'freelancer_list')]
    public function index(FreelancerRepository $freelancerRepository): Response
    {
        $freelancers = $freelancerRepository->findAll();

        return $this->render('freelancer/index.html.twig', [
            'freelancers' => $freelancers,
        ]);
    }

    #[Route('/freelancer/{id}', name: 'freelancer_detail')]
    public function show(Freelancer $freelancer): Response
    {
        return $this->render('freelancer/show.html.twig', [
            'freelancer' => $freelancer,
        ]);
    }

}