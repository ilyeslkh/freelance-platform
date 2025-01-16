<?php

namespace App\Entity;

use App\Repository\FreelancerRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: FreelancerRepository::class)]
class Freelancer extends User
{
    

    #[ORM\Column(length: 255, nullable: true)]    
    private ?string $portfolio = null;

    #[ORM\Column]
    private ?bool $available = null;

  

    public function getPortfolio(): ?string
    {
        return $this->portfolio;
    }

    public function setPortfolio(string $portfolio): static
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    public function isAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): static
    {
        $this->available = $available;

        return $this;
    }
}
