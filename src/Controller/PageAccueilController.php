<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageAccueilController extends AbstractController
{
    /**
     * @Route("/", name="page_accueil")
     */
    public function index(): Response
    {
        return $this->render('Accueil/index.html.twig', [
            'controller_name' => 'PageAccueilController',
        ]);
    }

    /**
     * @Route("/à-propos", name="à-propos")
     */
    public function propos(): Response
    {
        return $this->render('à-propos/index.html.twig', [
            'controller_name' => 'àProposController',
        ]);
    }

    /**
     * @Route("/nos-Actions", name="nos-actions")
     */
    public function actions(): Response
    {
        return $this->render('nos-actions/index.html.twig', [
            'controller_name' => 'nosActionscontroller',
        ]);
    }

     /**
     * @Route("/programmation-informatique", name="programmation-info")
     */
    public function programmation(): Response
    {
        return $this->render('programmation/index.html.twig', [
            'controller_name' => 'programmationController',
        ]);
    }


    /**
     * @Route("/competence-numerique", name="competenceNumerique")
     */
    public function competences(): Response
    {
        return $this->render('competenceNumerique/index.html.twig', [
            'controller_name' => 'Competencescontroller',
        ]);
    }


     /**
     * @Route("/ateliers-sens-critique", name="ateliersSensCritique")
     */
    public function sensCritique(): Response
    {
        return $this->render('SensCritique/index.html.twig', [
            'controller_name' => 'sensCritiqueController',
        ]);
    }


    /**
     * @Route("/vendredi-entreprise", name="VendrediEntreprise")
     */
    public function vendredi(): Response
    {
        return $this->render('vendredi-entreprise/index.html.twig', [
            'controller_name' => 'Entreprisecontroller',
        ]);
    }

    /**
     * @Route("/contact", name="contactNous")
     */
    public function contact(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'sensCritiqueController',
        ]);
    }

    /**
     * @Route("/wicode", name="Wicode")
     */
    public function wicode(): Response
    {
        return $this->render('wicode/index.html.twig', [
            'controller_name' => 'Entreprisecontroller',
        ]);
    }
}
