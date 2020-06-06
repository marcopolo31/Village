<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class InscriptionType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, $this->getConfiguration("Pseudo", "Veuillez saisir un pseudo ou un nom..."))
            ->add('password',PasswordType::class, $this->getConfiguration("Mot de passe", "Tapez un mot de passe"))
            ->add('verifPassword',PasswordType::class, $this->getConfiguration("Verification de mot de passe", "Retapez votre mot de passe pour verif"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
