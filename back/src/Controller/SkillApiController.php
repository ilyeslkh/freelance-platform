<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Repository\SkillRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/skills')]
class SkillApiController
{
    private $skillRepository;
    private $entityManager;

    public function __construct(SkillRepository $skillRepository, EntityManagerInterface $entityManager)
    {
        $this->skillRepository = $skillRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $skills = $this->skillRepository->findAll();
        return new JsonResponse($skills, JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $skill = $this->skillRepository->find($id);

        if (!$skill) {
            return new JsonResponse(['error' => 'Skill not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse($skill, JsonResponse::HTTP_OK);
    }

    #[Route('/', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $skill = new Skill();
        $skill->setName($data['name']);

        $this->entityManager->persist($skill);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Skill created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $skill = $this->skillRepository->find($id);

        if (!$skill) {
            return new JsonResponse(['error' => 'Skill not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $skill->setName($data['name']);

        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Skill updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $skill = $this->skillRepository->find($id);

        if (!$skill) {
            return new JsonResponse(['error' => 'Skill not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($skill);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Skill deleted'], JsonResponse::HTTP_OK);
    }
}

