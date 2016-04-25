<?php

namespace FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ModificaUserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('label' => false))
            ->add('password', TextType::class, array('label' => false))
            ->add('dataDiNascita', HiddenType::class, array('data' =>date('d-F-Y')))
            ->add('telefono', TextType::class, array('label' => false))
            ->add('imageFile', VichImageType::class)
            ->add('save', SubmitType::class, array('label' => false))
        ;
    }
}
