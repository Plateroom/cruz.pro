<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Entity\Sala;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FrontBundle\Form\Type\SalaForm;


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

      public function salaModificaAction(Request $request)
  {
     return $this->render('FrontBundle:Sala:modifica_sala.html.twig');
  }

 #  /**
 #    * @Route("/sala", name="sala_list")
 #    */
 #   public function listAction()
 #   {
 #       $aule = $this->getDoctrine()->getRepository('FrontBundle:Sala')->findAll();
 #
 #       return $this->render('AppBundle:Aula:list.html.twig', array(
 #           'sale' => $sale,
 #       ));
 #   }
 #
 #   /**
 #    * @Route("/sala/new", name="sala_create")
 #    */
    public function createAction(Request $request)
    {
        $sala = new Sala();

        if (!$sala) {
            throw new NotFoundHttpException();
        }

        $form = $this->createForm(SalaForm::class, $sala);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $sala = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sala);
            $em->flush();

            $this->addFlash(
                'notice',
                'Sala creata con successo'
            );

            #return $this->redirectToRoute('sala_list');
        }

        return $this->render('FrontBundle:Sala:create_sala.html.twig', array(
            'form' => $form->createView(),
        ));
    }
 #
 #   /**
 #    * @Route("/sala/{id}", name="sala_view")
 #    */
 #   public function viewAction($id)
 #   {
 #       $sala = $this->getDoctrine()->getRepository('FrontBundle:Sala')->find($id);
 #
 #       if (!$sala) {
 #           throw new NotFoundHttpException();
 #       }
 #
 #       return $this->render('FrontBundle:Sala:sala.html.twig', array(
 #           'sala' => $sala,
 #       ));
 #   }
 #
 #   /**
 #    * @Route("/sala/{id}/edit", name="sala_edit")
 #    */
 #   public function editAction(Request $request)
 #   {
 #       $sala = $this->getDoctrine()->getRepository('FrontBundle:Sala')->find($request->get('id'));
 #
 #       if (!$sala) {
 #           throw new NotFoundHttpException();
 #       }
 #
 #       $form = $this->createForm(SalaForm::class, $sala);
 #
 #       $form->handleRequest($request);
 #
 #       if ($form->isSubmitted() && $form->isValid()) {
 #           // Salvo cose.
 #           $sala = $form->getData();
 #
 #           $em = $this->getDoctrine()->getManager();
 #           $em->persist($sala);
 #           $em->flush();
 #
 #           $this->addFlash(
 #               'notice',
 #               'Aula modificata con successo'
 #           );
 #
 #           return $this->redirectToRoute('sala_list');
 #       }
 #
 #       return $this->render('FrontBundle:Sala:modifica_sala.html.twig', array(
 #           'form' => $form->createView(),
 #       ));
 #   }
 #
 #   /**
 #    * @Route("/sala/{id}/delete", name="sala_delete")
 #    */
 #   public function deleteAction($id)
 #   {
 #       $sala = $this->getDoctrine()->getRepository('FrontBundle:Sala')->find($id);
 #
 #       if (!$sala) {
 #           throw new NotFoundHttpException();
 #       }
 #
 #       $em = $this->getDoctrine()->getManager();
 #       $em->remove($sala);
 #       $em->flush();
 #
 #       $this->addFlash(
 #           'notice',
 #           'Aula eliminata con successo'
 #       );
 #
 #       return $this->redirectToRoute('sala_list');
 #   }

}
