<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Form\Type\ModificaUserForm;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FrontBundle\Entity\User;


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
    $users = $this->getDoctrine()->getRepository('FrontBundle:User')->findAll();

      return $this->render('FrontBundle:User:lista_users.html.twig', array(
          'users' => $users
      ));
    }



    public function editAction(Request $request)
    {
      $user = $this->getDoctrine()->getRepository('FrontBundle:User')->find($request->get('id'));
      if (!$user) {
          throw new NotFoundHttpException();
      }
      $form = $this->createForm(ModificaUserForm::class, $user);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          // Salvo cose.
          $user = $form->getData();
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();
          $this->addFlash(
              'notice',
              'Utente modificato con successo'
          );
          return $this->redirectToRoute('front_user', ['id' => $user->getId()]);
        }
      return $this->render('FrontBundle:User:modifica_user.html.twig', array(
          'form' => $form->createView(),
          'user' => $user
        ));
    }
}
