<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Service>
     */
    #[ORM\ManyToMany(targetEntity: Service::class, inversedBy: 'categories')]
    private Collection $serviceCategory;

    public function __construct()
    {
        $this->serviceCategory = new ArrayCollection();
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
     * @return Collection<int, Service>
     */
    public function getServiceCategory(): Collection
    {
        return $this->serviceCategory;
    }

    public function addServiceCategory(Service $serviceCategory): static
    {
        if (!$this->serviceCategory->contains($serviceCategory)) {
            $this->serviceCategory->add($serviceCategory);
        }

        return $this;
    }

    public function removeServiceCategory(Service $serviceCategory): static
    {
        $this->serviceCategory->removeElement($serviceCategory);

        return $this;
    }
}
