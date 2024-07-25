<?php

namespace App\Service;

use App\Entity\TacticsPuzzle;
use Doctrine\ORM\EntityManagerInterface;

class TacticsPuzzles
{
    public function create(string $fen, array|string $solution): void
    {

    }

    public function get(EntityManagerInterface $entityManager, int $id = 0): array
    {
        $puzzle = $id ? $entityManager->getRepository(TacticsPuzzle::class)->find($id) :
            $entityManager->getRepository(TacticsPuzzle::class)->findOneBy([]);

        return [
            'id' => $puzzle->getId(),
            'fen' => $puzzle->getFen(),
            'solution' => array_merge(explode(' ', $puzzle->getSolution()), ['']), // empty string marks the end of the puzzle solution
            'next' => $puzzle->getId() + 1 // this is a hack to get the next puzzle id, need to do a proper query
        ];
    }

    public function getRandom(EntityManagerInterface $entityManager): array
    {
        $puzzles = $entityManager->getRepository(TacticsPuzzle::class)->findAll();
        $puzzle = $puzzles[array_rand($puzzles)];
        $formattedPuzzle = [
            'id' => $puzzle->getId(),
            'fen' => $puzzle->getFen(),
            'solution' => explode(' ', $puzzle->getSolution())
        ];

        $formattedPuzzle['solution'][] = ''; // marks the end of the puzzle solution

        return $formattedPuzzle;
    }
}