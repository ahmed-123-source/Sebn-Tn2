<?php

namespace App\Form;

use App\Entity\Pdca;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PdcaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Action')
            ->add('Pilote')
            ->add('Date_deb')
            ->add('Date_fin')
            ->add('Etat', ChoiceType::class, [
                'choices' => [
                    'Action Realisée dans le delai' => 'Action Realisée dans le delai',
                    'On Going' => 'On Going',
                    'Action En retard' => 'Action En retard',
                ],
            ])
            ->add('Commentaire', TextareaType::class, [
                'required'   => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pdca::class,
        ]);
    }
}
