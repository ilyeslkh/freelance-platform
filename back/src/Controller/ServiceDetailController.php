<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceDetailController extends AbstractController {
    #[Route('/service/{id}', name: 'service_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id, ServiceRepository $serviceRepository): Response {
        $service = $serviceRepository->find($id);

        if (!$service) {
            throw $this->createNotFoundException('Service non trouvé.');
        }

        return $this->render('service/detail.html.twig', [
            'service' => $service,
        ]);
    }
}