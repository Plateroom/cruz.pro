<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventiController extends Controller
{
    public function eventiAction()
    {
        return $this->render('FrontBundle:Evento:lista_eventi.html.twig');
    }
}
