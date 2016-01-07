<?php

namespace MaisonLigues\croisiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MaisonLigues\croisiereBundle\Entity\Bateau;
use MaisonLigues\croisiereBundle\Form\BateauType;
use MaisonLigues\croisiereBundle\Entity\Liaison;
use MaisonLigues\croisiereBundle\Form\LiaisonType;
use MaisonLigues\croisiereBundle\Entity\Traversee;
use MaisonLigues\croisiereBundle\Form\TraverseeType;
use MaisonLigues\croisiereBundle\Entity\Port;
use MaisonLigues\croisiereBundle\Form\PortType;
use MaisonLigues\croisiereBundle\Entity\Secteur;
use MaisonLigues\croisiereBundle\Form\SecteurType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaisonLiguesCroisiereBundle:Default:index.html.twig');
    }

    public function ajoutBateauAction()
    {
    	$request=$this->get('request');
    	$ajout=new Bateau();
    	$form=$this->createform(new BateauType(),$ajout);
    	if($request->getMethod()=='POST')
    	{
    		$form->bind($request);
    		if($form->isValid())
    		{
    			$em=$this->getDoctrine()->getManager();
    			$em->persist($ajout);
    			$em->flush();
    		}
    	}
    	return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutBateau.html.twig',array('form'=>$form->createView()));
    }


     public function ajoutLiaisonAction()
    {
        $request=$this->get('request');
        $ajout=new Liaison();
        $form=$this->createform(new LiaisonType(),$ajout);
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($ajout);
                $em->flush();
            }
        }
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutLiaison.html.twig',array('form'=>$form->createView()));
    }

     public function ajoutTraverseeAction()
    {
        $request=$this->get('request');
        $ajout=new Traversee();
        $form=$this->createform(new TraverseeType(),$ajout);
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($ajout);
                $em->flush();
            }
        }
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutTraversee.html.twig',array('form'=>$form->createView()));
    }

         public function ajoutPortAction()
    {
        $request=$this->get('request');
        $ajout=new Port();
        $form=$this->createform(new PortType(),$ajout);
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($ajout);
                $em->flush();
            }
        }
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutPort.html.twig',array('form'=>$form->createView()));
    }


        public function ajoutSecteurAction()
    {
        $request=$this->get('request');
        $ajout=new Secteur();
        $form=$this->createform(new SecteurType(),$ajout);
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($ajout);
                $em->flush();
            }
        }
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutSecteur.html.twig',array('form'=>$form->createView()));
    }

    public function BateauAction()
    {
        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();
        $repository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Bateau');
        $lesBateaux=$repository->findAll();
        return $this->render('MaisonLiguesCroisiereBundle:Default:bateau.html.twig',array('lesBateaux'=>$lesBateaux));

    }

        public function LiaisonAction()
    {
        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();
        $repository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Liaison');
        $lesLiaisons=$repository->findAll();
        return $this->render('MaisonLiguesCroisiereBundle:Default:liaison.html.twig',array('lesLiaisons'=>$lesLiaisons));

    }

    public function PortsAction()
    {
        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();
        $repository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Port');
        $lesPorts=$repository->findAll();
        return $this->render('MaisonLiguesCroisiereBundle:Default:ports.html.twig',array('lesPorts'=>$lesPorts));

    }

    public function TraverseesAction($id)
    {
        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();
        $repository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Liaison');
        $laLiaison=$repository->findOneById($id);
        return $this->render('MaisonLiguesCroisiereBundle:Default:traversees.html.twig',array('laLiaison'=>$laLiaison));

    }
}
