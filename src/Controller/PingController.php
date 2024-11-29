<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PingController extends AbstractController
{
    #[Route('/ping', name: 'ping_test')]
    public function ping(): JsonResponse
    {
        // Retorne uma resposta de sucesso
        return new JsonResponse(['message' => '200']);
    }
}