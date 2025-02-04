<?php

namespace App\Controller;

use App\Entity\Freelancer;
use App\Repository\FreelancerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/freelancers')]
class FreelancerApiController
{
    private $freelancerRepository;
    private $entityManager;

    public function __construct(FreelancerRepository $freelancerRepository, EntityManagerInterface $entityManager)
    {
        $this->freelancerRepository = $freelancerRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $freelancers = $this->freelancerRepository->findAll();

        return new JsonResponse($freelancers, JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $freelancer = $this->freelancerRepository->find($id);

        if (!$freelancer) {
            return new JsonResponse(['error' => 'Freelancer not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse($freelancer, JsonResponse::HTTP_OK);
    }

    #[Route('/', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $freelancer = new Freelancer();
        $freelancer->setEmail($data['email']);
        $freelancer->setPortfolio($data['portfolio']);
        $freelancer->setAvailable($data['available']);

        $this->entityManager->persist($freelancer);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Freelancer created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $freelancer = $this->freelancerRepository->find($id);

        if (!$freelancer) {
            return new JsonResponse(['error' => 'Freelancer not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $freelancer->setEmail($data['email']);
        $freelancer->setPortfolio($data['portfolio']);
        $freelancer->setAvailable($data['available']);

        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Freelancer updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $freelancer = $this->freelancerRepository->find($id);

        if (!$freelancer) {
            return new JsonResponse(['error' => 'Freelancer not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($freelancer);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Freelancer deleted'], JsonResponse::HTTP_OK);
    }
}
