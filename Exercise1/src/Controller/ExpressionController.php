<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpressionController extends AbstractController
{
    #[Route('/expression', name: 'app_expression')]
    public function index(): Response
    {
        $time = new \DateTime();
        $time->format('H');

        // conditionnal hour

        return $this->render('expression/index.html.twig', [
            'text' => 'Hello world',
        ]);
    }
}
