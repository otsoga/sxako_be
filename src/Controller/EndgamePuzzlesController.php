<?php

namespace App\Controller;

use App\Service\EndgamePuzzles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EndgamePuzzlesController extends AbstractController
{
    #[Route('/api/v1/endgame/puzzles', name: 'app_endgame_puzzles')]
    public function index(EndgamePuzzles $endgamePuzzles): Response
    {
        return $this->json($endgamePuzzles->getRandom());
    }
}
