<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceEditController extends AbstractController {
    #[Route('/service/edit/{id}', name: 'service_edit', requirements: ['id' => '\d+'])]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $service = $entityManager->getRepository(Service::class)->find($id);

        if (!$service || $service->getUser() !== $this->getUser()) {
            throw $this->createNotFoundException('Service non trouvé ou vous n\'êtes pas autorisé.');
        }

        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('service_list');
        }

        return $this->render('service/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
