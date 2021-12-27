<?php

namespace App\Entity;

use App\Repository\InscriptionIntervenantsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=InscriptionIntervenantsRepository::class)
 */
class InscriptionIntervenants
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DateDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumeroDeTelephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $VilleDeResidence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Specialite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IntervenuChezWitech;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SiOuiQuand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CommentIntervenir;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Experience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ParticipationProgrammePedagogique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesMatin1;
      /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesMatin2;
      /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesMatin3;
      /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesMatin4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesApresMidi1;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesApresMidi2;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesApresMidi3;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $DisponibilitesApresMidi4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Motivation;

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

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(string $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getDateDeNaissance(): ?string
    {
        return $this->DateDeNaissance;
    }

    public function setDateDeNaissance(string $DateDeNaissance): self
    {
        $this->DateDeNaissance = $DateDeNaissance;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getNumeroDeTelephone(): ?string
    {
        return $this->NumeroDeTelephone;
    }

    public function setNumeroDeTelephone(string $NumeroDeTelephone): self
    {
        $this->NumeroDeTelephone = $NumeroDeTelephone;

        return $this;
    }

    public function getVilleDeResidence(): ?string
    {
        return $this->VilleDeResidence;
    }

    public function setVilleDeResidence(string $VilleDeResidence): self
    {
        $this->VilleDeResidence = $VilleDeResidence;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->Statut;
    }

    public function setStatut(string $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->Specialite;
    }

    public function setSpecialite(string $Specialite): self
    {
        $this->Specialite = $Specialite;

        return $this;
    }

    public function getIntervenuChezWitech(): ?string
    {
        return $this->IntervenuChezWitech;
    }

    public function setIntervenuChezWitech(string $IntervenuChezWitech): self
    {
        $this->IntervenuChezWitech = $IntervenuChezWitech;

        return $this;
    }

    public function getSiOuiQuand(): ?string
    {
        return $this->SiOuiQuand;
    }

    public function setSiOuiQuand(string $SiOuiQuand): self
    {
        $this->SiOuiQuand = $SiOuiQuand;

        return $this;
    }

    public function getCommentIntervenir(): ?string
    {
        return $this->CommentIntervenir;
    }

    public function setCommentIntervenir(string $CommentIntervenir): self
    {
        $this->CommentIntervenir = $CommentIntervenir;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->Experience;
    }

    public function setExperience(string $Experience): self
    {
        $this->Experience = $Experience;

        return $this;
    }

    public function getParticipationProgrammePedagogique(): ?string
    {
        return $this->ParticipationProgrammePedagogique;
    }

    public function setParticipationProgrammePedagogique(string $ParticipationProgrammePedagogique): self
    {
        $this->ParticipationProgrammePedagogique = $ParticipationProgrammePedagogique;

        return $this;
    }

    

 

    public function getMotivation(): ?string
    {
        return $this->Motivation;
    }

    public function setMotivation(string $Motivation): self
    {
        $this->Motivation = $Motivation;

        return $this;
    }

    /**
     * Get the value of DisponibilitesMatin1
     */ 
    public function getDisponibilitesMatin1()
    {
        return $this->DisponibilitesMatin1;
    }

    /**
     * Set the value of DisponibilitesMatin1
     *
     * @return  self
     */ 
    public function setDisponibilitesMatin1($DisponibilitesMatin1)
    {
        $this->DisponibilitesMatin1 = $DisponibilitesMatin1;

        return $this;
    }

    /**
     * Get the value of DisponibilitesMatin2
     */ 
    public function getDisponibilitesMatin2()
    {
        return $this->DisponibilitesMatin2;
    }

    /**
     * Set the value of DisponibilitesMatin2
     *
     * @return  self
     */ 
    public function setDisponibilitesMatin2($DisponibilitesMatin2)
    {
        $this->DisponibilitesMatin2 = $DisponibilitesMatin2;

        return $this;
    }

    /**
     * Get the value of DisponibilitesMatin3
     */ 
    public function getDisponibilitesMatin3()
    {
        return $this->DisponibilitesMatin3;
    }

    /**
     * Set the value of DisponibilitesMatin3
     *
     * @return  self
     */ 
    public function setDisponibilitesMatin3($DisponibilitesMatin3)
    {
        $this->DisponibilitesMatin3 = $DisponibilitesMatin3;

        return $this;
    }

    /**
     * Get the value of DisponibilitesMatin4
     */ 
    public function getDisponibilitesMatin4()
    {
        return $this->DisponibilitesMatin4;
    }

    /**
     * Set the value of DisponibilitesMatin4
     *
     * @return  self
     */ 
    public function setDisponibilitesMatin4($DisponibilitesMatin4)
    {
        $this->DisponibilitesMatin4 = $DisponibilitesMatin4;

        return $this;
    }

    /**
     * Get the value of DisponibilitesApresMidi1
     */ 
    public function getDisponibilitesApresMidi1()
    {
        return $this->DisponibilitesApresMidi1;
    }

    /**
     * Set the value of DisponibilitesApresMidi1
     *
     * @return  self
     */ 
    public function setDisponibilitesApresMidi1($DisponibilitesApresMidi1)
    {
        $this->DisponibilitesApresMidi1 = $DisponibilitesApresMidi1;

        return $this;
    }

    /**
     * Get the value of DisponibilitesApresMidi2
     */ 
    public function getDisponibilitesApresMidi2()
    {
        return $this->DisponibilitesApresMidi2;
    }

    /**
     * Set the value of DisponibilitesApresMidi2
     *
     * @return  self
     */ 
    public function setDisponibilitesApresMidi2($DisponibilitesApresMidi2)
    {
        $this->DisponibilitesApresMidi2 = $DisponibilitesApresMidi2;

        return $this;
    }

    /**
     * Get the value of DisponibilitesApresMidi3
     */ 
    public function getDisponibilitesApresMidi3()
    {
        return $this->DisponibilitesApresMidi3;
    }

    /**
     * Set the value of DisponibilitesApresMidi3
     *
     * @return  self
     */ 
    public function setDisponibilitesApresMidi3($DisponibilitesApresMidi3)
    {
        $this->DisponibilitesApresMidi3 = $DisponibilitesApresMidi3;

        return $this;
    }

    /**
     * Get the value of DisponibilitesApresMidi4
     */ 
    public function getDisponibilitesApresMidi4()
    {
        return $this->DisponibilitesApresMidi4;
    }

    /**
     * Set the value of DisponibilitesApresMidi4
     *
     * @return  self
     */ 
    public function setDisponibilitesApresMidi4($DisponibilitesApresMidi4)
    {
        $this->DisponibilitesApresMidi4 = $DisponibilitesApresMidi4;

        return $this;
    }
}
