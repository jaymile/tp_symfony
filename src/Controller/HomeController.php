<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="Home")
     */
    public function AfficherHome(): Response
    {
        return $this->render('home/home.html.twig', [
            'titre' => 'Acceuil'
        ]);
    }
}
