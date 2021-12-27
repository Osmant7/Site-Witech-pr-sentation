<?php

namespace App\Entity;

use App\Repository\InscriptionsEntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;





/**
 * @ORM\Entity(repositoryClass=InscriptionsEntrepriseRepository::class)
 * 
 */
class InscriptionsEntreprise
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, minMessage="Le nom de votre entreprise est bien trop court")
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $nomEntreprise;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, minMessage="l'adresse entrée est trop court")
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $nomResponsable;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $numeroTelephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $disponibilitesMatin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $disponibilitesApresMidi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $disponibilitesJournee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreCollaborateurs;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message= "Ce champ ne peut pas être vide")
     */
    private $miseSituation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remarque;


    public function getId(): ?int
    {
        return $this->id;
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

  
    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(string $remarque): self
    {
        $this->remarque = $remarque;

        return $this;
    }



    /**
     * Get the value of nomEntreprise
     */ 
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set the value of nomEntreprise
     *
     * @return  self
     */ 
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of nomResponsable
     */ 
    public function getNomResponsable()
    {
        return $this->nomResponsable;
    }

    /**
     * Set the value of nomResponsable
     *
     * @return  self
     */ 
    public function setNomResponsable($nomResponsable)
    {
        $this->nomResponsable = $nomResponsable;

        return $this;
    }

    /**
     * Get the value of numeroTelephone
     */ 
    public function getNumeroTelephone()
    {
        return $this->numeroTelephone;
    }

    /**
     * Set the value of numeroTelephone
     *
     * @return  self
     */ 
    public function setNumeroTelephone($numeroTelephone)
    {
        $this->numeroTelephone = $numeroTelephone;

        return $this;
    }

    /**
     * Get the value of disponibilitesMatin
     */ 
    public function getDisponibilitesMatin()
    {
        return $this->disponibilitesMatin;
    }

    /**
     * Set the value of disponibilitesMatin
     *
     * @return  self
     */ 
    public function setDisponibilitesMatin($disponibilitesMatin)
    {
        $this->disponibilitesMatin = $disponibilitesMatin;

        return $this;
    }

    /**
     * Get the value of disponibilitesApresMidi
     */ 
    public function getDisponibilitesApresMidi()
    {
        return $this->disponibilitesApresMidi;
    }

    /**
     * Set the value of disponibilitesApresMidi
     *
     * @return  self
     */ 
    public function setDisponibilitesApresMidi($disponibilitesApresMidi)
    {
        $this->disponibilitesApresMidi = $disponibilitesApresMidi;

        return $this;
    }

    /**
     * Get the value of disponibilitesJournee
     */ 
    public function getDisponibilitesJournee()
    {
        return $this->disponibilitesJournee;
    }

    /**
     * Set the value of disponibilitesJournee
     *
     * @return  self
     */ 
    public function setDisponibilitesJournee($disponibilitesJournee)
    {
        $this->disponibilitesJournee = $disponibilitesJournee;

        return $this;
    }

    /**
     * Get the value of nombreCollaborateurs
     */ 
    public function getNombreCollaborateurs()
    {
        return $this->nombreCollaborateurs;
    }

    /**
     * Set the value of nombreCollaborateurs
     *
     * @return  self
     */ 
    public function setNombreCollaborateurs($nombreCollaborateurs)
    {
        $this->nombreCollaborateurs = $nombreCollaborateurs;

        return $this;
    }

    /**
     * Get the value of miseSituation
     */ 
    public function getMiseSituation()
    {
        return $this->miseSituation;
    }

    /**
     * Set the value of miseSituation
     *
     * @return  self
     */ 
    public function setMiseSituation($miseSituation)
    {
        $this->miseSituation = $miseSituation;

        return $this;
    }
}
