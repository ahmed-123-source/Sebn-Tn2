<?php

namespace App\Form;

use App\Entity\Audit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AuditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Projet')
        ->add('Score')
        ->add('Points_cntrl', ChoiceType::class, [
            'choices'  => [
                '1.	Eliminer ' => [
                'Informations' => 'Informations',
                'Lieux de travail' => 'Lieux de travail',
                'Materiels' => 'Materiels',
                'Outils' => 'Outils',
                'Materiels de nettoyage' => 'Materiels de nettoyage',
            ],
            '2.	Ranger ' => [
                'Emplacement des materiels' => 'Emplacement des materiels',
                'Emplacement des articles' => 'Emplacement des articles',
                'Emplacement pour les affaires personnelles' => 'Emplacement pour les affaires personnelles',
                'Etat du lieux de travail' => 'Etat du lieux de travail',
                'Zone de rebut' => 'Zone de rebut',
            ],
            '3.	Nettoyer ' => [
                'Surfaces de travail' => 'Surfaces de travail',
                'Taux de stockage de materiels' => 'Taux de stockage de materiels',
                'Equipements' => 'Equipements',
                'Equipement de nettoyage' => 'Equipement de nettoyage',
                'Sois et murs' => 'Sois et murs',
            ],
                '4.	Standardiser ' => [
                'Equipement de protection individuelle' => 'Equipement de protection individuelle',
                'Standard de travail' => 'Standard de travail',
                'Formulaire et planification' => 'Formulaire et planification',
                'Contrôle interne' => 'Contrôle interne',
                'Systeme unifié' => 'Systeme unifié',
            ],
                '5.	Respecter ' => [
                'Contrôle quotidien de 5S' => 'Contrôle quotidien de 5S',
                'Audit' => 'Audit',
                'Apparence' => 'Apparence',
                'Familiarité et comprehension' => 'Familiarité et comprehension',
                'Progrès' => 'Progrès',
            ],

        ],
     ])
        ->add('Description', TextareaType::class)
        ->add('Defaillances', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Audit::class,
        ]);
    }
}
