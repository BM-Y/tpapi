<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\GgroupRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource(
    normalizationContext:['group'=>['read']]
)]
#[ORM\Entity(repositoryClass: GgroupRepository::class)]
class Ggroup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

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
}
