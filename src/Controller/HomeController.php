<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(MessageGenerator $messageGenerator): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'happyMessage' => $messageGenerator->getHappyMessage()
        ]);
    }
}
