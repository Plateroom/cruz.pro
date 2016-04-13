<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SalaController extends Controller
{
   /**
    * @param Request $request
    * @return \Symfony\Component\HttpFoundation\Response
    */
   public function salaAction(Request $request)
   {
      return $this->render('FrontBundle:Sala:sala.html.twig');
   }

    public function listaSaleAction(Request $request)
   {
      return $this->render('FrontBundle:Sala:lista_sale.html.twig');
   }

       public function modificaSalaAction(Request $request)
   {
      return $this->render('FrontBundle:Sala:modifica_sala.html.twig');
   }

}
