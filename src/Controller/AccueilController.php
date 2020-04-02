<?php

namespace App\Controller;

use App\Repository\InformationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(InformationRepository $repository)
    {
        $informations = $repository->findAll();
        return $this->render('accueil/index.html.twig', [
            'informations' => $informations,
        ]);
    }
}
