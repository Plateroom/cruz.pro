<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
   /**
    * @param Request $request
    * @return \Symfony\Component\HttpFoundation\Response
    */
   public function userAction(Request $request)
   {
      return $this->render('FrontBundle:Default:user.html.twig');
   }

    public function listaUsersAction(Request $request)
   {
      return $this->render('FrontBundle:Default:lista_users.html.twig');
   }


    public function userAdminAction(Request $request)
   {
      return $this->render('FrontBundle:Default:user_admin.html.twig');
   }
}
