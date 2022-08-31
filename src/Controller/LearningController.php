<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/about-me', name: 'app_learning')]
    public function aboutMe(): Response
    {
        $name = 'Ian';
        return $this->render('learning/index.html.twig', ['name' => $name,
        ]);
    }
}
