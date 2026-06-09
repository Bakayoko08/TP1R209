<?php

namespace App\Entity;

use App\Repository\IUTRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IUTRepository::class)]
class IUT
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo_path = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Universite $universite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

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

    public function getUniversite(): ?Universite
    {
        return $this->universite;
    }

    public function setUniversite(?Universite $universite): static
    {
        $this->universite = $universite;

        return $this;
    }
}
