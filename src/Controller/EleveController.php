<?php

namespace App\Controller;

use App\Entity\Eleve;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EleveController extends AbstractController
{
    /**
     * @Route("/eleves", name="eleves")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Eleve::class);
        $eleves = $repository->findAll();

        return $this->render('eleve/eleves.html.twig', [
            'eleves' => $eleves,
        ]);
    }
}
