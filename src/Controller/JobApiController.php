<?php

namespace App\Controller;

use App\Entity\Job;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/jobs')]
class JobApiController
{
    private $jobRepository;
    private $entityManager;

    public function __construct(JobRepository $jobRepository, EntityManagerInterface $entityManager)
    {
        $this->jobRepository = $jobRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $jobs = $this->jobRepository->findAll();
        return new JsonResponse($jobs, JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $job = $this->jobRepository->find($id);

        if (!$job) {
            return new JsonResponse(['error' => 'Job not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse($job, JsonResponse::HTTP_OK);
    }

    #[Route('/', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $job = new Job();
        $job->setTitle($data['title']);
        $job->setDescription($data['description']);
        $job->setBudget($data['budget']);

        $this->entityManager->persist($job);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Job created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $job = $this->jobRepository->find($id);

        if (!$job) {
            return new JsonResponse(['error' => 'Job not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $job->setTitle($data['title']);
        $job->setDescription($data['description']);
        $job->setBudget($data['budget']);

        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Job updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $job = $this->jobRepository->find($id);

        if (!$job) {
            return new JsonResponse(['error' => 'Job not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($job);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Job deleted'], JsonResponse::HTTP_OK);
    }
}
