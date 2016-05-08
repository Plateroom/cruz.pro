<?php
namespace FrontBundle\Form\Type;

use FrontBundle\Entity\Sala;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Doctrine\ORM\EntityRepository;


class SalaSearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $elencoCitta = $options['data']['elenco_citta'];
        $builder
            ->add('posti', ChoiceType::class, array('label' => false, 'choices' => [
               'Tutte' => 0,
                10 => 10,
                15 => 15,
                20 => 20,
                25 => 25,
            ]))
            ->add('save', SubmitType::class)
        ;
    }
}
