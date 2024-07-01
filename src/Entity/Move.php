<?php

namespace App\Entity;

use App\Repository\MoveRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MoveRepository::class)]
class Move
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 6)]
    private ?string $name = null;

    #[ORM\Column(length: 91)]
    private ?string $fen = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $plyNumber = null;

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

    public function getFen(): ?string
    {
        return $this->fen;
    }

    public function setFen(string $fen): static
    {
        $this->fen = $fen;

        return $this;
    }

    public function getPlyNumber(): ?int
    {
        return $this->plyNumber;
    }

    public function setPlyNumber(int $plyNumber): static
    {
        $this->plyNumber = $plyNumber;

        return $this;
    }
}
