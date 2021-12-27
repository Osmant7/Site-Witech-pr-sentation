<?php

namespace App\Controller;

use App\Entity\InscriptionsEntreprise;
use App\Repository\InscriptionsEntrepriseRepository;
use App\Form\InscriptionEntrepriseType;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionEntreprise(Request $request): Response
    {
        $inscriptionEntrepr = new InscriptionsEntreprise();

        $formEntreprise = $this->createForm(InscriptionEntrepriseType::class, $inscriptionEntrepr);

        $formEntreprise->handleRequest($request);
                    
        if($formEntreprise->isSubmitted() && $formEntreprise->isValid()) {
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($inscriptionEntrepr);
            $em->flush();

            $this->addFlash(
                'info',
                'Le formulaire a été envoyé avec succès !'
            );
            
        
           

        }
    


        return $this->render('inscription/index.html.twig', [
            'formInscriptionEntreprise' => $formEntreprise->createView()
        ]);
    }
}
