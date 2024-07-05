<?php

namespace App\Controller;
header('Access-Control-Allow-Origin: *');


use App\Service\TacticsPuzzles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

class TacticsPuzzlesController extends AbstractController
{
    #[Route('/api/v1/tactics/puzzles', name: 'app_tactics_puzzles', format: 'json')]
    public function index(TacticsPuzzles $tacticsPuzzles): Response
    {
        return $this->json($tacticsPuzzles->getRandom());
    }
}
