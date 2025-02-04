<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository, ServiceRepository $serviceRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $services = $serviceRepository->findBy([], null, 6); // Récupère les 6 premiers services

        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'services' => $services,
        ]);
    }

    #[Route('/banned', name: 'banned_page')]
    public function bannedPage(): Response
    {
        return $this->render('security/banned.html.twig', [
            'message' => "Votre compte a été suspendu ou banni. Si vous pensez que cela est une erreur, contactez l'administrateur.",
        ]);
    }
}
