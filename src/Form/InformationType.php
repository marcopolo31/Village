<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Information;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InformationType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class,$this->getConfiguration("Titre", "Veuillez saisir un titre"))
            ->add('libelle', TextareaType::class,$this->getConfiguration("Description", "Veuillez saisir une description"))
            ->add('imageFile', FileType::class,$this->getConfiguration("Image", "Veuillez choisir une image"))
            ->add('date', TextType::class,$this->getConfiguration("Date", "Exemple de Date: Du 01/01/2020..."))
            ->add('categorie', EntityType::class,[
                'class' => Categorie::class,
                'choice_label' => 'libelle'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Information::class,
        ]);
    }
}
