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
      return $this->render('FrontBundle:User:user.html.twig');
   }

  public function listAction(Request $request)
  {
#     $numPosti = (int) $request->get('numero_posti');
#
#      if ($numPosti) {
#          $users = $this->getDoctrine()->getRepository('FrontBundle:User')->findByMinPosti($numPosti);
#      } else {
#
#      }
    $users = $this->getDoctrine()->getRepository('FrontBundle:User')->findAll();

      return $this->render('FrontBundle:User:lista_users.html.twig', array(
          'users' => $users,
          #'numero_posti' => $numPosti,
      ));
  }

    public function userAdminAction(Request $request)
   {
      return $this->render('FrontBundle:User:user_admin.html.twig');
   }

    public function modificaUserAction(Request $request)
   {
      return $this->render('FrontBundle:User:modifica_user.html.twig');
   }
}
