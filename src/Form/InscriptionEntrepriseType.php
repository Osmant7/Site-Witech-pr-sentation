<?php

namespace App\Form;

use App\Entity\InscriptionsEntreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InscriptionEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
                    ->add('nomEntreprise', TextType::class)
                    ->add('adresse', TextType::class)
                    ->add('nomResponsable', TextType::class)
                    ->add('numeroTelephone', NumberType::class)
                    ->add('disponibilitesMatin', ChoiceType::class, [
                        'choices' => [
                            '09/07' => "9 juin", 
                            '16/07' => "16 juin", 
                            '20/08' => "20 juillet",
                            'Aucune' => "Aucune",
                        ]
                    ])
                    ->add('disponibilitesApresMidi', ChoiceType::class, [
                        'choices' => [
                            '09/07' => "9 juin", 
                            '16/07' => "16 juin", 
                            '20/08' => "20 juillet",
                            'Aucune' => "Aucune",
                        ],
                    ])
                     ->add('disponibilitesJournee', ChoiceType::class, [
                        'choices' => [
                            '09/07' => "9 juin", 
                            '16/07' => "16 juin", 
                            '20/08' => "20 juillet",
                            'Aucune' => "Aucune",
                        ],
                    ])

                     ->add('nombreCollaborateurs', ChoiceType::class, [
                        'choices' => [
                            '1' => "1",
                            '2' => "2",
                            '3' => "3", 
                            '3 ou plus' => "3 ou plus", 
                        ],
                    ])

                    ->add('miseSituation', TextType::class)
                    ->add('remarque', TextareaType::class)
                    
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
