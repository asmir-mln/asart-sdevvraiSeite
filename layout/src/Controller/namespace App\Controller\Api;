<?php

namespace App\Controller\Api;

use App\Service\AI\Orchestrator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class AIController extends AbstractController
{
    #[Route('/api/ai', name: 'api_ai', methods: ['POST'])]
    public function ask(Request $request, Orchestrator $orchestrator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $question = $data['question'] ?? null;

        if (!$question) {
            return $this->json([
                'error' => 'Question manquante'
            ], 400);
        }

        $result = $orchestrator->handle($question);

        return $this->json($result);
    }
}
