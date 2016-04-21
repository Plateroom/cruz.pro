<?php

namespace FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class SalaForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array('label' => false))
            ->add('sede', TextType::class, array('label' => false))
            ->add('citta', TextType::class, array('label' => false))
            ->add('datacreazione', DateTimeType::class, array('label' => false))
            ->add('posti', IntegerType::class, array('label' => false))
            ->add('telefono', TextType::class, array('label' => false))
            #->add('immagine', UrlType::class)
            ->add('descrizione', TextType::class, array('label' => false))
            ->add('save', SubmitType::class, array('label' => false))
        ;
    }
}