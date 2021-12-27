<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contactUs")
     */
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();
            // ici nous enverrons le mail
            $message = (new \Swift_Message('Nouveau message'))
            // on attribue l'expediteur
            ->setFrom($contact['email'])

            // on attribue le destinataire
            ->setTo('osmantoy035@gmail.com')

            // on créer le message avec la vue twig
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig', compact('contact')
                ),
                'text/html'
            )
            ;

            // on envoie le msg 
            $mailer->send($message);

            $this->addFlash('message', 'Le formulaire à bien été envoyé');
            return $this->redirectToRoute('page_accueil');
        }
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }
}
