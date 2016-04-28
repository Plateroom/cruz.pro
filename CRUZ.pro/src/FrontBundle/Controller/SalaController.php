<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FrontBundle\Form\Type\SalaForm;
use FrontBundle\Form\Type\SalaFormEdit;
use FrontBundle\Entity\Sala;
use FrontBundle\Entity\User;
use FrontBundle\Form\Type\SalaSearchForm;



class SalaController extends Controller
{
  /**
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function salaAction(Request $request)
  {

     $sala = $this->getDoctrine()->getRepository('FrontBundle:Sala')->find($request->get('id'));

     return $this->render('FrontBundle:Sala:sala.html.twig', [

     'sala' => $sala
      ]);
  }


/////////////////////////////////////////////////////


  public function listAction(Request $request)
  {

    $elencoCitta = $this->getDoctrine()->getRepository('FrontBundle:Sala')->getElencoCitta();

    $form = $this->createForm(SalaSearchForm::class, ['elenco_citta' => $elencoCitta]);

    $form->handleRequest($request);
    $elencoSale = [];


    if ($form->isSubmitted() && $form->isValid()) {

      $posti = $form->get('posti')->getData();
      $citta = $form->get('citta')->getData();
      $elencoSale = $this->getDoctrine()->getRepository('FrontBundle:Sala')->findByMinPosti($posti, $citta);

    } else
    {
      $elencoSale = $this->getDoctrine()->getRepository('FrontBundle:Sala')->findAll();
    }


    return $this->render('FrontBundle:Sala:lista_sale.html.twig', array(
        'form' => $form->createView(),
        'elenco_sale' => $elencoSale,
      ));
  }


    public function createAction(Request $request)
    {
        $sala = new Sala();

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

            return $this->redirectToRoute('front_lista_sale');
        }

        return $this->render('FrontBundle:Sala:create_sala.html.twig', array(
            'form' => $form->createView(),
        ));
    }


  public function editAction(Request $request)
  {
      $sala = $this->getDoctrine()->getRepository('FrontBundle:Sala')->find($request->get('id'));
      if (!$sala) {
          throw new NotFoundHttpException();
      }
      $form = $this->createForm(SalaFormEdit::class, $sala);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          // Salvo cose.
          $sala = $form->getData();
          $em = $this->getDoctrine()->getManager();
          $em->persist($sala);
          $em->flush();
          $this->addFlash(
              'notice',
              'Sala modificata con successo'
          );
          return $this->redirectToRoute('front_sala', ['id' => $sala->getId()]);
      }
      return $this->render('FrontBundle:Sala:modifica_sala.html.twig', array(
          'form' => $form->createView(),
          'sala' => $sala
      ));
  }




  public function deleteAction($id)
  {
      $sala = $this->getDoctrine()->getRepository('FrontBundle:Sala')->find($id);

      if (!$sala) {
          throw new NotFoundHttpException();
      }

      $em = $this->getDoctrine()->getManager();
      $em->remove($sala);
      $em->flush();

      $this->addFlash(
          'notice',
          'Sala eliminata con successo'
      );

      return $this->redirectToRoute('front_lista_sale');
  }

}
