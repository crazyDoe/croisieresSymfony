<?php

namespace MaisonLigues\croisiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TraverseeController extends Controller
{
    public function lesTraverseesAction($id, \DateTime $date)
    {
        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();
        $repository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Traversee');
        $lesTraversees=$repository->findBy( array('laLiaison'=>$id,'date'=>$date) );
         return $this->render('MaisonLiguesCroisiereBundle:Default:lesTraversees.html.twig',array('lesTraversees'=>$lesTraversees));

    }

     public function choixTraverseeAction()
    {
        $form = $this->createFormBuilder()
            ->add('Date','date')
            ->add('lesLiaison','entity',
                array('class'=>'MaisonLiguesCroisiereBundle:Liaison'))
            ->getForm();


            if(!empty($_POST))
            {
              //$laDate = $_POST['Date'];
               $laDate = $_POST['form']['Date'];
               $idLiaison = $_POST['form']['lesLiaison'];

               return $this->redirect($this->generateUrl('maison_ligues_croisiere_lesTraversees',array('id'=>$idLiaison,'date'=>implode("-",$laDate) )));

            }

        return $this->render('MaisonLiguesCroisiereBundle:Default:choixTraversee.html.twig',array('form'=>$form->createView()));

    }
}