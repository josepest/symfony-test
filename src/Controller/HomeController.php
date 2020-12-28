<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use App\Service\SiteUpdateManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(MessageGenerator $messageGenerator, SiteUpdateManager $siteUpdateManager): Response
    {
        /*
        if ($siteUpdateManager->notifyOfSiteUpdate()) {
            $this->addFlash('success', 'Notification mail was sent successfully.');
        }
        */

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'happyMessage' => $messageGenerator->getHappyMessage()
        ]);
    }
}
