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

        $faker = \Faker\Factory::create('fr_FR');

        $info1 = new Information();
        $info1->setTitre("Foire aux Jouets")
            ->setLibelle($faker->paragraph())
            ->setImage("jeu.jpg")
            ->setDate("Du 04 Avril 2020 au 05 Juin 2020")
            ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info1);

        $info2 = new Information();
        $info2->setTitre("Degustation de bière")
            ->setLibelle($faker->paragraph())
            ->setImage("biere.jpg")
            ->setDate("Du 23 Avril 2020 au 07 mai 2020")
            ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info2);

        $info3 = new Information();
        $info3->setTitre("Fête du Village")
            ->setLibelle($faker->paragraph())
            ->setImage("party.jpg")
            ->setDate("15 Avril 2020")
            ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info3);
        
        $info4 = new Information();
        $info4->setTitre("Marathon du Village")
            ->setLibelle($faker->paragraph())
            ->setImage("marathon.jpg")
            ->setDate("Le 15 Mai 2020")
            ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
            ->setCategorie($cat1)
            
            ;
        $manager->persist($info4);

        $info5 = new Information();
        $info5->setTitre("Alerte Coronavirus")
                ->setLibelle($faker->paragraph())
                ->setImage("coronavirus.jpg")
                ->setDate("Depuis le 16 Mars 2020")
                ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
                ->setCategorie($cat2)
                ;
        $manager->persist($info5);

        $info6 = new Information();
        $info6->setTitre("Vigilance Cambriolage")
                ->setLibelle($faker->paragraph())
                ->setImage("cambriolage.jpg")
                ->setDate("Depuis le 01 Janvier 2020")
                ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
                ->setCategorie($cat2)
                ;
        $manager->persist($info6);

        $info7 = new Information();
        $info7->setTitre("Collecte des déchets")
                ->setLibelle($faker->paragraph())
                ->setImage("dechet.jpg")
                ->setDate("A partir du 23 Février 2020")
                ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
                ->setCategorie($cat2)
                ;
        $manager->persist($info7);

        $info8 = new Information();
        $info8->setTitre("Fermeture du bureau Poste")
                ->setLibelle($faker->paragraph())
                ->setImage("poste.jpg")
                ->setDate("Du 23 Mars 2020 au 06 Juin 2020")
                ->setUpdatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
                ->setCategorie($cat2)
                ;
        $manager->persist($info8);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
