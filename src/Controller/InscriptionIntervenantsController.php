<?php

namespace App\Controller;

use App\Entity\InscriptionIntervenants;
use App\Form\InscriptionIntervenantsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class InscriptionIntervenantsController extends AbstractController
{
     /**
     * @Route("/inscription-intervenants", name="inscriptionIntervenants")
     */
    public function inscriptionIntervenants(Request $request): Response
    {
        $inscriptionDesIntervenants = new InscriptionIntervenants();

        $formIntervenants = $this->createForm(InscriptionIntervenantType::class, $inscriptionDesIntervenants);

        $formIntervenants->handleRequest($request);
                    
        if($formIntervenants->isSubmitted() && $formIntervenants->isValid()) {
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($inscriptionDesIntervenants);
            $em->flush();

            $this->addFlash(
                'info',
                'Le formulaire a été envoyé avec succès !'
            );
            
        
           

        }
         return $this->render('inscriptionJeunes/index.html.twig', [
            'formInscriptionJeunes' => $formIntervenants->createView()
        ]);
    }
    
    }