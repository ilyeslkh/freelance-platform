<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;


class CategoryController extends AbstractController
{
    #[Route('/categories', name: 'category_list', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categories/{id}/services', name: 'category_services', methods: ['GET'])]
    public function services(Category $category): Response
    {
        // Les services associés à la catégorie sont disponibles via la relation ManyToMany
        $services = $category->getServices();

        return $this->render('category/services.html.twig', [
            'category' => $category,
            'services' => $services,
        ]);
    }
}
