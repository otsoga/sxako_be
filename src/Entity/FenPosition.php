<?php

namespace App\Entity;

use App\Repository\FenPositionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FenPositionRepository::class)]
class FenPosition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $piecePlacement = null;

    #[ORM\Column(length: 1)]
    private ?string $active_color = null;

    #[ORM\Column(length: 4)]
    private ?string $castlingRights = null;

    #[ORM\Column(length: 2)]
    private ?string $ep_target = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $halfmoveClock = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $fullMoves = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPiecePlacement(): ?string
    {
        return $this->piecePlacement;
    }

    public function setPiecePlacement(string $piecePlacement): static
    {
        $this->piecePlacement = $piecePlacement;

        return $this;
    }

    public function getActiveColor(): ?string
    {
        return $this->active_color;
    }

    public function setActiveColor(string $active_color): static
    {
        $this->active_color = $active_color;

        return $this;
    }

    public function getCastlingRights(): ?string
    {
        return $this->castlingRights;
    }

    public function setCastlingRights(string $castlingRights): static
    {
        $this->castlingRights = $castlingRights;

        return $this;
    }

    public function getEpTarget(): ?string
    {
        return $this->ep_target;
    }

    public function setEpTarget(string $ep_target): static
    {
        $this->ep_target = $ep_target;

        return $this;
    }

    public function getHalfmoveClock(): ?int
    {
        return $this->halfmoveClock;
    }

    public function setHalfmoveClock(int $halfmoveClock): static
    {
        $this->halfmoveClock = $halfmoveClock;

        return $this;
    }

    public function getFullMoves(): ?int
    {
        return $this->fullMoves;
    }

    public function setFullMoves(int $fullMoves): static
    {
        $this->fullMoves = $fullMoves;

        return $this;
    }
}
