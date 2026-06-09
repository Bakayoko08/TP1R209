<?php

namespace App\Entity;

use App\Repository\UniversiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniversiteRepository::class)]
class Universite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo_path = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLogoPath(): ?string
    {
        return $this->logo_path;
    }

    public function setLogoPath(?string $logo_path): static
    {
        $this->logo_path = $logo_path;

        return $this;
    }
}
