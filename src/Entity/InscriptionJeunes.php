<?php

namespace App\Entity;

use App\Repository\InscriptionJeunesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=InscriptionJeunesRepository::class)
 */
class InscriptionJeunes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $numeroTelephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $Quartier;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $Scolarise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NiveauScolaire;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $NomEcole;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $VilleEcole;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $PourquoiCetteFormation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ChoixSession;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $CommentAsTuConnuWitech;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remarque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(string $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getNumeroTelephone(): ?string
    {
        return $this->numeroTelephone;
    }

    public function setNumeroTelephone(string $numeroTelephone): self
    {
        $this->numeroTelephone = $numeroTelephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getQuartier(): ?string
    {
        return $this->Quartier;
    }

    public function setQuartier(string $Quartier): self
    {
        $this->Quartier = $Quartier;

        return $this;
    }

    public function getScolarise(): ?string
    {
        return $this->Scolarise;
    }

    public function setScolarise(string $Scolarise): self
    {
        $this->Scolarise = $Scolarise;

        return $this;
    }

    public function getNiveauScolaire(): ?string
    {
        return $this->NiveauScolaire;
    }

    public function setNiveauScolaire(string $NiveauScolaire): self
    {
        $this->NiveauScolaire = $NiveauScolaire;

        return $this;
    }

    public function getNomEcole(): ?string
    {
        return $this->NomEcole;
    }

    public function setNomEcole(string $NomEcole): self
    {
        $this->NomEcole = $NomEcole;

        return $this;
    }

    public function getVilleEcole(): ?string
    {
        return $this->VilleEcole;
    }

    public function setVilleEcole(string $VilleEcole): self
    {
        $this->VilleEcole = $VilleEcole;

        return $this;
    }

   

    public function getChoixSession(): ?string
    {
        return $this->ChoixSession;
    }

    public function setChoixSession(string $ChoixSession): self
    {
        $this->ChoixSession = $ChoixSession;

        return $this;
    }

   
    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): self
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get the value of PourquoiCetteFormation
     */ 
    public function getPourquoiCetteFormation()
    {
        return $this->PourquoiCetteFormation;
    }

    /**
     * Set the value of PourquoiCetteFormation
     *
     * @return  self
     */ 
    public function setPourquoiCetteFormation($PourquoiCetteFormation)
    {
        $this->PourquoiCetteFormation = $PourquoiCetteFormation;

        return $this;
    }

    /**
     * Get the value of CommentAsTuConnuWitech
     */ 
    public function getCommentAsTuConnuWitech()
    {
        return $this->CommentAsTuConnuWitech;
    }

    /**
     * Set the value of CommentAsTuConnuWitech
     *
     * @return  self
     */ 
    public function setCommentAsTuConnuWitech($CommentAsTuConnuWitech)
    {
        $this->CommentAsTuConnuWitech = $CommentAsTuConnuWitech;

        return $this;
    }
}
