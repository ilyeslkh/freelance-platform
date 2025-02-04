<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'skills')]
    private Collection $userSkill;

    public function __construct()
    {
        $this->userSkill = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUserSkill(): Collection
    {
        return $this->userSkill;
    }

    public function addUserSkill(User $userSkill): static
    {
        if (!$this->userSkill->contains($userSkill)) {
            $this->userSkill->add($userSkill);
        }

        return $this;
    }

    public function removeUserSkill(User $userSkill): static
    {
        $this->userSkill->removeElement($userSkill);

        return $this;
    }
}
