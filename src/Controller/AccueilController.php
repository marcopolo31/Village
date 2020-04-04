<?php

namespace App\Controller;

use App\Entity\Information;
use App\Repository\InformationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(InformationRepository $repository, PaginatorInterface $paginatorInterface, Request $request)
    {
        $information = new Information();
        $informations = $paginatorInterface->paginate(
            $repository->findAllWithPagination($information),
            $request->query->getInt('page', 1), /*page number*/
            6 /*limit per page*/
        );
        return $this->render('accueil/index.html.twig', [
            'informations' => $informations,
        ]);
    }




    
}
