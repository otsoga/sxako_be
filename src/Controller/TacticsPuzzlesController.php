<?php

namespace App\Controller;
header('Access-Control-Allow-Origin: *');


use App\Service\TacticsPuzzles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

class TacticsPuzzlesController extends AbstractController
{
    #[Route('/api/v1/tactics/puzzles', name: 'app_tactics_puzzles_get', methods: ['GET'],format: 'json')]
    public function index(TacticsPuzzles $tacticsPuzzles, EntityManagerInterface $entityManager, Request $request): Response
    {
//        return $this->json($tacticsPuzzles->getRandom($entityManager));
        return $this->json($tacticsPuzzles->get($entityManager, $request->query->getInt('id')));
    }
//    #[Route('/api/v1/tactics/puzzles', name: 'app_tactics_puzzles_post', methods: ['POST'], format: 'json')]
//    public function create(string $fen, string|array $solution): Response
//    {
//        return $this->json(['message' => 'created tactics puzzle']);
//    }
}
