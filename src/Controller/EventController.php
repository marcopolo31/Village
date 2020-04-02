<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Information;
use App\Repository\CategorieRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventController extends AbstractController
{
    /**
     * @Route("/categories", name="categories")
     */
    public function categorie(CategorieRepository $repository)
    {   
        $categories = $repository->findAll();
        return $this->render('event/categorie.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/categories/{id}", name="afficher_categorie")
     */
    public function afficherCategorie(Categorie $categorie)
    {   
        return $this->render('event/afficher_cate.html.twig', [
            'categorie' => $categorie,
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
