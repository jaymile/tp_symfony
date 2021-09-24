<?php

namespace App\Controller;

use App\Entity\Prof;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfController extends AbstractController
{
    /**
     * @Route("/profs", name="profs")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Prof::class); //repository est une varriable qui me sert a sotoker mes deux methodes getDoc et getRep son nom est pas important il pourrai s'appeler toto on senfout
        $profs = $repository->findAll();


        return $this->render('prof/profs.html.twig', [
            'profs' => $profs,
        ]);
    }
}
