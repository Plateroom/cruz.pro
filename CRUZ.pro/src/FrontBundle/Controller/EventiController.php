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
    $user = $this->getDoctrine()->getRepository('FrontBundle:Evento');
    #  if ($numPosti) {
    #      $sale = $this->getDoctrine()->getRepository('FrontBundle:Sala')->findByMinPosti($numPosti);
    #  } else {
    #
    #  }
      $evento = $this->getDoctrine()->getRepository('FrontBundle:Evento')->findAll();
      return $this->render('FrontBundle:Evento:lista_eventi.html.twig', array(
          'eventi' => $evento,
          'user' => $user,
          #'numero_posti' => $numPosti,
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
