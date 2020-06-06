<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, $this->getConfiguration('Prénom', 'Veuillez saisir votre prénom...'))
            ->add('lastname', TextType::class, $this->getConfiguration('Nom', 'Veuillez saisir votre nom...'))
            ->add('phone', TelType::class, $this->getConfiguration('Téléphone', 'Veuillez saisir votre numéro de téléphone...'))
            ->add('email', EmailType::class, $this->getConfiguration('Email', 'Veuillez saisir votre email...'))
            ->add('message', TextareaType::class, $this->getConfiguration('Message', 'Veuillez ecrire un petit message...'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
