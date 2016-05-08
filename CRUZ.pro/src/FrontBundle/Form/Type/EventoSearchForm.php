<?php
namespace FrontBundle\Form\Type;

use FrontBundle\Entity\Sala;
use FrontBundle\Entity\Evento;
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


class EventoSearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $elencoSala = $options['data']['elenco_sala'];
        $builder
            ->add('sala', ChoiceType::class, array('label' => false, 'choices' => $elencoSala))
            ->add('save', SubmitType::class);
    }
}
