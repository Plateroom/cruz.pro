<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Entity\Evento;
use FrontBundle\Entity\User;
use FrontBundle\Form\Type\EventoForm;
use FOS\UserBundle\Doctrine\UserManager;

class EventiController extends Controller
{
  public function listAction(Request $request)
  {

    $evento = $this->getDoctrine()->getRepository('FrontBundle:Evento')->findAll();

      return $this->render('FrontBundle:Evento:lista_eventi.html.twig', array(
          'eventi' => $evento,
      ));
  }

  public function eventoAction(Request $request)
    {
      $elencoSale = $this->getDoctrine()->getRepository('FrontBundle:Evento')->getElencoSale();

      $user = $this->getDoctrine()->getRepository('FrontBundle:Evento');

      $evento = $this->getDoctrine()->getRepository('FrontBundle:Evento')->find($request->get('id'));

      return $this->render('FrontBundle:Evento:evento.html.twig', array(
          'evento' => $evento,
          'user' => $user,
      ));

    }


    public function createAction(Request $request)
    {
        $evento = new Evento();

        #$elencoSale = $this->getDoctrine()->getRepository('FrontBundle:Sala')->findAll();


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
            #'elencoSale' => $elencoSale,
        ));
    }
}
