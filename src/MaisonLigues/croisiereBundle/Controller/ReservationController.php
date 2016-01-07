<?php

namespace MaisonLigues\croisiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MaisonLigues\croisiereBundle\Entity\Reservation;
use MaisonLigues\croisiereBundle\Form\ReservationType;
use MaisonLigues\croisiereBundle\Entity\Enregistrer;
use MaisonLigues\croisiereBundle\Form\EnregistrerType;

class ReservationController extends Controller
{
	public function ReservationAction($id)
	{

         $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();
        $repository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Liaison');
        $Travrepository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Traversee');

        $laTraversee = $Travrepository->findOneById($id);
        $laLiaison = $laTraversee->getLaLiaison();

        $tarifRepo=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Tarifer');


        $lesTarifs=$tarifRepo->findBylaLiaison($laLiaison);  


		$request =  $this->get('request');
		$ajout = new Reservation();
        foreach($lesTarifs as $unTarif)
        {
            $monEnreg = new Enregistrer();
            $monEnreg->setQuantite(0);
            $monEnreg->setLeType($unTarif->getLeType());
            $monEnreg->setLaReservation($ajout);
            $ajout->addLesEnregistrement($monEnreg);
        }


		$form = $this->createform(new ReservationType(), $ajout);

		// Recherche de la liason correspondante 
		$doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();



		if($request->getMethod()=='POST')
    	{
    		$ajout->setLaTraversee($laTraversee);
    		$form->bind($request);
    		if($form->isValid())
    		{
    			$em=$this->getDoctrine()->getManager();
    			$em->persist($ajout);
    			$em->flush();
    		}
    	}

    	return $this->render('MaisonLiguesCroisiereBundle:Default:reservation.html.twig',
            array('form'=>$form->createView(),
                'lesTarifs'=>$lesTarifs));
	}

    public function TarifsAction($id)
    {
        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getEntityManager();
        $repository=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Liaison');

        $tarifRepo=$entityManager->getRepository('MaisonLiguesCroisiereBundle:Tarifer');

        $laLiaison=$repository->findOneById($id);
        $lesTarifs=$tarifRepo->findBylaLiaison($laLiaison);  

        return $this->render('MaisonLiguesCroisiereBundle:Default:tarifs.html.twig',
            array('lesTarifs'=>$lesTarifs));
    }



}