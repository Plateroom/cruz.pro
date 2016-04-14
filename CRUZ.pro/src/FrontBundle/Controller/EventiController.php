<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventiController extends Controller
{
    public function eventiAction()
    {
        return $this->render('FrontBundle:Evento:lista_eventi.html.twig');
    }


    public function eventoModalAction()
    {
        return $this->render('FrontBundle:Evento:evento.html.twig');
    }

    public function creaEventoAction()
    {
        return $this->render('FrontBundle:Evento:crea_evento.html.twig');
    }
}
