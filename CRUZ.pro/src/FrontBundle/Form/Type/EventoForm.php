<?php

namespace FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EventoForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array('label' => false))
            ->add('dataCreazione', HiddenType::class, array('data' =>date('d-F-Y')),date_default_timezone_set('Europe/Rome'))
            ->add('data', DateType::class, array('label' => false))
            ->add('sala', EntityType::class, array('label' => false,
              'class'=>'FrontBundle:Sala',
              'choice_label'=>'nome'))
            ->add('oraInizio', TimeType::class, array('label' => false))
            ->add('oraFine', TimeType::class, array('label' => false))
            ->add('descrizione', TextType::class, array('label' => false))
            ->add('save', SubmitType::class, array('label' => false))
        ;
    }
}
