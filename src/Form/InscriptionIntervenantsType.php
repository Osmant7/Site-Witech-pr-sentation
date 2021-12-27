<?php

namespace App\Form;

use App\Entity\InscriptionIntervenants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InscriptionIntervenantsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Genre', ChoiceType::class, [
                        'choices' => [
                            'Masculin' => "Masculin", 
                            'Feminin' => "Feminin", 
                        ]
                    ])
            ->add('DateDeNaissance', TextType::class)
            ->add('Email', TextType::class)
            ->add('NumeroDeTelephone', NumberType::class)
            ->add('VilleDeResidence', TextType::class)
            ->add('Statut', ChoiceType::class, [
                        'choices' => [
                            'Etudiant' => "Etudiant", 
                            'Professionnel' => "Professionnel", 
                            
                        ]
                    ])
            ->add('Specialite', ChoiceType::class, [
                        'choices' => [
                            'Langage Python' => "Langage Python", 
                            'Développement Web : HTML & CSS' => "Développement Web : HTML & CSS", 
                            'Développement application mobile' => "Développement application mobile",
                            'Psychologie / Psychopratique' => "Psychologie / Psychopratique",
                        ]
                    ])
            ->add('IntervenuChezWitech', ChoiceType::class, [
                        'choices' => [
                            'Oui' => "Oui", 
                            'Non' => "Non", 
                        ]
                    ])
            ->add('SiOuiQuand', TextType::class)
            ->add('CommentIntervenir', ChoiceType::class, [
                        'choices' => [
                            'Formateur-trice' => "Formateur-trice", 
                            'Bénévole assitant-e' => "Bénévole assitant-e", 
                            
                        ]
                    ])
            ->add('Experience', ChoiceType::class, [
                        'choices' => [
                            'Aucune' => "Aucune", 
                            '0-2 ans' => "0-2 ans",
                            '2-4 ans' => "2-4 ans",
                            'Plus de 5 ans' => "Plus de 5 ans",
                            
                        ]
                    ])
            ->add('ParticipationProgrammePedagogique', TextType::class)
            ->add('DisponibilitesMatin1', ChoiceType::class, [
                        'choices' => [
                            'De 10h30 à 12h30    Du 05/07 au 09/07' => "De 10h30 à 12h30    Du 05/07 au 09/07",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('DisponibilitesMatin2', ChoiceType::class, [
                        'choices' => [
                            'De 10h30 à 12h30    Du 12/07 au 16/07' => "De 10h30 à 12h30    Du 12/07 au 16/07",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('DisponibilitesMatin3', ChoiceType::class, [
                        'choices' => [
                            'De 10h30 à 12h30    Du 16/08 au 20/08' => "De 10h30 à 12h30    Du 16/08 au 16/08",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('DisponibilitesMatin4', ChoiceType::class, [
                        'choices' => [
                            'De 10h30 à 12h30    Du 23/08 au 27/08' => "De 10h30 à 12h30    Du 23/08 au 27/08",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('DisponibilitesApresMidi1', ChoiceType::class, [
                        'choices' => [
                            'De 14h30 à 16h30    Du 05/07 au 09/07' => "De 14h30 à 16h30    Du 05/07 au 09/07",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('DisponibilitesApresMidi2' , ChoiceType::class, [
                        'choices' => [
                            'De 14h30 à 16h30    Du 12/07 au 16/07' => "De 14h30 à 16h30    Du 12/07 au 16/07",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('DisponibilitesApresMidi3', ChoiceType::class, [
                        'choices' => [
                            'De 14h30 à 16h30    Du 16/08 au 20/08' => "De 14h30 à 16h30    Du 16/08 au 16/08",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('DisponibilitesApresMidi4', ChoiceType::class, [
                        'choices' => [
                            'De 14h30 à 16h30    Du 23/08 au 27/08' => "De 14h30 à 16h30    Du 23/08 au 27/08",
                            'Aucune' => "Aucune", 
                            
                        ]
                    ])
            ->add('Motivation', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InscriptionIntervenants::class,
        ]);
    }
}
