<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, EntityManagerInterface $entityManager, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($contact);
            $entityManager->flush();

            $message =(new \Swift_Message('Nouveau Contact'))
            ->setFrom($contact->getEmail())
            ->setTo('marc.reg083@mail.com')
            ->setBody(
                $this->renderView(
                    'email/mail.html.twig', compact('contact')),
                    'text/html'
                    
                );
            
            $mailer->send($message);
            $this->addFlash('email', "Votre email a bien été envoyé");
            return $this->redirectToRoute("accueil");
        }
        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
