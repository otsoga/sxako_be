<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class RegistrationController extends AbstractController
{
    #[Route('/api/registration', name: 'app_registration', methods: ['POST'])]
    public function index(Request $request,
                          UserPasswordHasherInterface $passwordHasher,
                          EntityManagerInterface $entityManager): Response
    {
        $json = json_decode($request->getContent());

        $user = new User();

        // hash the password (based on the security.yaml config for the $user class)
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $json->password
        );
        $user->setEmail($json->email);
        $user->setPassword($hashedPassword);
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json(['message' => 'created user']);
    }
}
