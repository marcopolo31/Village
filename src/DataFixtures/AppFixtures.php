<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Information;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   


        $cat1 = new Categorie();
        $cat1->setLibelle("Evenement");
        $manager->persist($cat1);

        $cat2 = new Categorie();
        $cat2->setLibelle("Actualité");
        $manager->persist($cat2);

        $info1 = new Information();
        $info1->setTitre("Party Jeux de sociétés")
            ->setLibelle("La mairie organise une soirée jeux de société au village")
            ->setImage("jeu.jpg")
            ->setDate("04 Avril 2020")
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info1);

        $info2 = new Information();
        $info2->setTitre("Degustation de bière")
            ->setLibelle("La distillerie du Village organise une degustation de leur bière")
            ->setImage("biere.jpg")
            ->setDate("23 Avril 2020")
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info2);

        $info3 = new Information();
        $info3->setTitre("Fête du Village")
            ->setLibelle("La mairie organise une soirée electro avec DJ Corona dans la salle des fêtes! Vous allez amuser jusqu'a en mourir!")
            ->setImage("party.jpg")
            ->setDate("15 Avril 2020")
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info3);
        
        $info4 = new Information();
        $info4->setTitre("Marathon du Village")
            ->setLibelle("Organisation d'un Marathon dans le village. Vous pouvez venir déguiser aussi!")
            ->setImage("marathon.jpg")
            ->setDate("15 Mai 2020")
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info4);

        $info5 = new Information();
        $info5->setTitre("Alerte Coronavirus")
                ->setLibelle("Suite à de nombreux cas de coronavirus, veuillez respecter les consignes de sécurité et rester chez vous!")
                ->setImage("coronavirus.jpg")
                ->setDate("16 Mars 2020")
                ->setCategorie($cat2)
                ;
        $manager->persist($info5);

        $info6 = new Information();
        $info6->setTitre("Vigilance Cambriolage")
                ->setLibelle("Suite aux cambriolages dont ont été victimes la pharmacie ainsi que le restaurant pizzeria, nous recommandons à la population de rester vigilants pendant cette période et de signaler tout comportement bizarre dans les rues de notre commune. 
                N'hésitez pas à contacter la police municipale ou la gendarmerie.")
                ->setImage("cambriolage.jpg")
                ->setDate("01 Janvier 2020")
                ->setCategorie($cat2)
                ;
        $manager->persist($info6);

        $info7 = new Information();
        $info7->setTitre("Collecte des déchets")
                ->setLibelle("Collecte des déchets recyclables et déchetterie
                Collecte des déchets menagers: Je vous informe que la collecte des déchets recyclables (sacs transparents) est suspendue à compter demain mercredi 18-03-2020 et ce jusqu’à nouvel ordre. A ce stade, et au-delà de l’arrêt de la collecte des déchets recyclables, la CC de l’Arc Mosellan est dans l’attente des consignes des pouvoirs publics concernant les modalités de traitement de ces déchets. La collecte des ordures ménagères n’est pour le moment pas impactée. Déchetterie: En raison des mesures prises contre la propagation du COVID-19, la Communauté de Communes de l’Arc Mosellan a pris la décision de fermer les trois déchèteries intercommunales situées à ABONCOURT, GUENANGE, KOENIGSMACKER à compter du mardi 17 mars et ce jusqu’à nouvel ordre.
                Agence postale
                Monsieur le Maire a décidé de la fermeture de l’Agence Postale Communale dès ce mardi 17 mars 2020, Pour info, les bureaux de Poste du secteur sont tous fermés.")
                ->setImage("dechet.jpg")
                ->setDate("23 Février 2020")
                ->setCategorie($cat2)
                ;
        $manager->persist($info7);

        $info8 = new Information();
        $info8->setTitre("Fermeture du bureau Poste")
                ->setLibelle("Fermeture du bureau de Poste en raison de la propagation du coronavirus")
                ->setImage("poste.jpg")
                ->setDate("23 Mars 2020")
                ->setCategorie($cat2)
                ;
        $manager->persist($info8);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
