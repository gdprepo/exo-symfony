<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping\GeneratedValue;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ApiResource([
    "collectionOperations" => ["get"],
    "itemOperations" => ["get"],
])]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $Categorie;

    #[ORM\Column(type: 'string', length: 255)]
    private $Description;

    #[ORM\Column(type: 'array')]
    private $Tailles = [];

    #[ORM\Column(type: 'array', nullable: true)]
    private $Keywords = [];

    #[ORM\Column(type: 'integer')]
    private $Price;

    #[ORM\Column(type: 'string', length: 255)]
    private $Image;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTailles(): ?array
    {
        return $this->Tailles;
    }

    public function setTailles(array $Tailles): self
    {
        $this->Tailles = $Tailles;

        return $this;
    }

    public function getKeywords(): ?array
    {
        return $this->Keywords;
    }

    public function setKeywords(?array $Keywords): self
    {
        $this->Keywords = $Keywords;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(int $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
