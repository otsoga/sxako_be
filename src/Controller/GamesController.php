<?php

namespace App\Controller;

use App\Service\Games;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GamesController extends AbstractController
{
    #[Route('/api/v1/games', name: 'app_games')]
    public function index(Games $games): Response
    {
        return $this->json($games->getRandom());
    }
}
