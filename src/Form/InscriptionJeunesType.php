<?php

namespace App\Form;

use App\Entity\InscriptionJeunes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InscriptionJeunesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('DateNaissance')
            ->add('numeroTelephone', NumberType::class)
            ->add('email', TextType::class)
            ->add('Ville', TextType::class)
            ->add('Quartier', TextType::class)
            ->add('Scolarise', TextType::class)
            ->add('NiveauScolaire', ChoiceType::class, [
                        'choices' => [
                            'Collège' => "Collège", 
                            'Lycée' => "Lycée", 
                            'Supérieur' => "Supérieur",
                        ],
                    ])
            ->add('NomEcole', TextType::class)
            ->add('VilleEcole', TextType::class)
            ->add('PourquoiCetteFormation', TextType::class)
            ->add('ChoixSession', ChoiceType::class, [
                        'choices' => [
                            'Du 23/08 au 27/08 De 10h30 à 12h30' => "Du 23/08 au 27/08  De 10h30 à 12h30", 
                            'Du 23/08 au 27/08 De 14h30 à 16h30' => "Du 23/08 au 27/08  De 14h30 à 16h30", 
                        ],
                    ])
            ->add('CommentAsTuConnuWitech', TextType::class)
            ->add('remarque', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InscriptionJeunes::class,
        ]);
    }
}
