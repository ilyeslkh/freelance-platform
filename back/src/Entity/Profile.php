<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile extends User
{
  

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $userProfile = null;

    #[ORM\Column(length: 255)]
    private ?string $bio = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;


    public function getUserProfile(): ?User
    {
        return $this->userProfile;
    }

    public function setUserProfile(?User $userProfile): static
    {
        $this->userProfile = $userProfile;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(string $bio): static
    {
        $this->bio = $bio;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }
}
