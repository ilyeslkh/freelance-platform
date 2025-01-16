<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceCreationController extends AbstractController {
    #[Route('/service/new', name: 'service_create')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $service->setUserService($this->getUser());
            $entityManager->persist($service);
            $entityManager->flush();

            return $this->redirectToRoute('service_list');
        }

        return $this->render('service/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

