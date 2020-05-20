<?php

namespace App\Form;

use App\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('person_type', ChoiceType::class, [
                'label' => 'Tipo:',
                'choices' => [
                    'Escolha uma opção abaixo' => '',
                    'Pessoa Física' => 'F',
                    'Pessoa Jurídica' => 'J'
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('person_identifier', TextType::class, [
                'label' => 'Identificador:',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('person_name', TextType::class, [
                'label' => 'Nome:',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('person_email', EmailType::class, [
                'label' => 'E-mail:',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Person::class,
        ]);
    }
}
