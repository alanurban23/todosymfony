<?php

namespace ToDoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Tytuł'))
            ->add('user', TextType::class, array(
                'label' => 'Użytkownik'))
            ->add('category', ChoiceType::class, array(
                'label' => 'Kategoria',
                'choices' => array(
                    'Zakupy' => 'Zakupy',
                    'Zadanie' => 'Zadanie',
                    'Wydarzenie' => 'Wydarzenie'
                ),
                'choices_as_values' => true,
            ))
            ->add('save', ButtonType::class);
    }


    public function getName()
    {
        return 'task';
    }
}
