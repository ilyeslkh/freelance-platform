<?php

namespace App\Controller;

use App\Entity\Service;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/services')]
class ServiceApiController
{
    private $serviceRepository;
    private $entityManager;

    public function __construct(ServiceRepository $serviceRepository, EntityManagerInterface $entityManager)
    {
        $this->serviceRepository = $serviceRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $services = $this->serviceRepository->findAll();

        return new JsonResponse($services, JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $service = $this->serviceRepository->find($id);

        if (!$service) {
            return new JsonResponse(['error' => 'Service not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse($service, JsonResponse::HTTP_OK);
    }

    #[Route('/', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $service = new Service();
        $service->setTitle($data['title']);
        $service->setDescription($data['description']);
        $service->setPrice($data['price']);

        $this->entityManager->persist($service);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Service created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $service = $this->serviceRepository->find($id);

        if (!$service) {
            return new JsonResponse(['error' => 'Service not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $service->setTitle($data['title']);
        $service->setDescription($data['description']);
        $service->setPrice($data['price']);

        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Service updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $service = $this->serviceRepository->find($id);

        if (!$service) {
            return new JsonResponse(['error' => 'Service not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($service);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Service deleted'], JsonResponse::HTTP_OK);
    }
}
