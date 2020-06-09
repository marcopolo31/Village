<?php

namespace App\Controller;


use App\Repository\InformationRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(InformationRepository $repository)
    {   
        return $this->render('accueil/index.html.twig', [
            'informations' => $repository->findInfoRecent()
        ]);
    }





    
}
