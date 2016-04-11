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
      return $this->render('FrontBundle:Default:sala.html.twig');
   }

    public function listaSaleAction(Request $request)
   {
      return $this->render('FrontBundle:Default:lista_sale.html.twig');
   }


}
