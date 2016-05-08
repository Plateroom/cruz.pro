<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FrontBundle\Entity\Evento;
use FrontBundle\Entity\User;
use FrontBundle\Entity\Sala;
use FrontBundle\Form\Type\EventoForm;
use FOS\UserBundle\Doctrine\UserManager;
use FrontBundle\Form\Type\EventoSearchForm;

class EventiController extends Controller
{
  public function listAction(Request $request)
  {

    $user = $this->getDoctrine()->getRepository('FrontBundle:Evento');

    $elencoSala= $this->getDoctrine()->getRepository('FrontBundle:Evento')->getElencoSala();

    $form = $this->createForm(EventoSearchForm::class, ['elenco_sale' => $elencoSala]);

    $form->handleRequest($request);
    $elencoEventi = [];


    if ($form->isSubmitted() && $form->isValid()) {

      $sala = $form->get('sala')->getData();
      $elencoEventi = $this->getDoctrine()->getRepository('FrontBundle:Evento')->findBySala($sala);

    } else
    {
      $elencoEventi = $this->getDoctrine()->getRepository('FrontBundle:Evento')->findAll();
    }


    return $this->render('FrontBundle:Evento:lista_eventi.html.twig', array(
        'form' => $form->createView(),
        'elenco_eventi' => $elencoEventi,
        'user' => $user,
      ));
  }

    public function eventoAction()
    {
        return $this->render('FrontBundle:Evento:evento.html.twig');
    }


    public function createAction(Request $request)
    {
        $evento = new Evento();

        $evento->setUser($this->getUser());

        $form = $this->createForm(EventoForm::class, $evento);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $evento = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($evento);
            $em->flush();

            $this->addFlash(
                'notice',
                'Evento creato con successo'
            );

            return $this->redirectToRoute('front_lista_eventi');
        }

        return $this->render('FrontBundle:Evento:crea_evento.html.twig', array(
            'form' => $form->createView(),
            'evento'=> $evento,
        ));
    }
}
