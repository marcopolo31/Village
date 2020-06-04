<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Information;
use App\Repository\InformationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class EventController extends AbstractController
{
    

    /**
     * @Route("/categories/{id}", name="afficher_categorie")
     */
    public function afficherCategorie(Categorie $categories)
    {   
        
        return $this->render('event/afficher_cate.html.twig', [
            'categories' => $categories,
            
        ]);
    }

    /**
     * @Route("/categories/info/{id}", name="afficher_info")
     */
    public function eventActu(Information $information)
    {   
        return $this->render('event/afficher_info.html.twig', [
            'information' => $information,
        ]);
    }
}
