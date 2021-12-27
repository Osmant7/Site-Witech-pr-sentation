<?php

namespace App\Controller;

use App\Entity\InscriptionJeunes;
use App\Form\InscriptionJeunesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class InscriptionJeunesController extends AbstractController
{
    /**
     * @Route("/inscription-jeunes", name="inscriptionJeunes")
     */
    public function inscriptionJeunes(Request $request): Response
    {
        $inscriptionDesJeunes = new InscriptionJeunes();

        $formJeunes = $this->createForm(InscriptionJeunesType::class, $inscriptionDesJeunes);

        $formJeunes->handleRequest($request);
                    
        if($formJeunes->isSubmitted() && $formJeunes->isValid()) {
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($inscriptionDesJeunes);
            $em->flush();

            $this->addFlash(
                'info',
                'Le formulaire a été envoyé avec succès !'
            );
            
        
           

        }
         return $this->render('inscriptionJeunes/index.html.twig', [
            'formInscriptionJeunes' => $formJeunes->createView()
        ]);
    }
    
    }
