<?php

namespace App\Controller;

use App\Entity\Classe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    /**
     * @Route("/classes", name="classes")
     */

    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Classe::class);
        $classes = $repository->findAll();

        return $this->render('classe/classes.html.twig', [
            'classes' => $classes,
        ]);
    }
}
