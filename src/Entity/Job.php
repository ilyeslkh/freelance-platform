<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: JobRepository::class)]
class Job
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 0)]
    private ?string $budget = null;

    #[ORM\ManyToOne(inversedBy: 'jobs')]
    private ?User $userJob = null;

    #[ORM\ManyToOne(inversedBy: 'jobs')]
    private ?Service $serviceJob = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(string $budget): static
    {
        $this->budget = $budget;

        return $this;
    }

    public function getUserJob(): ?User
    {
        return $this->userJob;
    }

    public function setUserJob(?User $userJob): static
    {
        $this->userJob = $userJob;

        return $this;
    }

    public function getServiceJob(): ?Service
    {
        return $this->serviceJob;
    }

    public function setServiceJob(?Service $serviceJob): static
    {
        $this->serviceJob = $serviceJob;

        return $this;
    }
}
