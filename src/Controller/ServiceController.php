<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Service;


class ServiceController extends AbstractController {
    #[Route('/services', name: 'service_list')]
    public function list(ServiceRepository $serviceRepository): Response {
        $services = $serviceRepository->findAll();
        return $this->render('service/list.html.twig', ['services' => $services]);
    }

    #[Route('/service/delete/{id}', name: 'service_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(int $id, EntityManagerInterface $entityManager): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $service = $entityManager->getRepository(Service::class)->find($id);

        if (!$service || $service->getUser() !== $this->getUser()) {
            throw $this->createNotFoundException('Service non trouvé ou vous n\'êtes pas autorisé.');
        }

        $entityManager->remove($service);
        $entityManager->flush();

        return $this->redirectToRoute('service_list');
}

}

