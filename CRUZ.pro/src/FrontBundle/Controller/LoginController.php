<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
   /**
    * @param Request $request
    * @return \Symfony\Component\HttpFoundation\Response
    */
   public function loginAction(Request $request)
   {
      return $this->render('FrontBundle:Default:login.html.twig');
   }
}
