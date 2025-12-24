<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class HealthCheckController extends AbstractController
{
    #[Route('/api/health', name: 'api_health_check', methods: ['GET'])]
    public function check(): JsonResponse
    {
        return $this->json([
            'status' => 'ok',
            'timestamp' => (new \DateTime())->format('Y-m-d H:i:s'),
            'service' => 'Symfony API',
            'version' => '1.0.0',
        ]);
    }
}
