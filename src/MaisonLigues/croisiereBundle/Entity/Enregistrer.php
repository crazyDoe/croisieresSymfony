<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enregistrer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MaisonLigues\croisiereBundle\Entity\EnregistrerRepository")
 */
class Enregistrer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
    * @var Type $leType
    * @ORM\ManyToOne(targetEntity="Type")
    */
    private $leType;

    /**
    * @var Reservation $laReservation
    * @ORM\ManyToOne(targetEntity="Reservation",inversedBy="lesEnregistrements")
    */
    private $laReservation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Enregistrer
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set leType
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Type $leType
     * @return Enregistrer
     */
    public function setLeType(\MaisonLigues\croisiereBundle\Entity\Type $leType = null)
    {
        $this->leType = $leType;
    
        return $this;
    }

    /**
     * Get leType
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Type 
     */
    public function getLeType()
    {
        return $this->leType;
    }

    /**
     * Set laReservation
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Reservation $laReservation
     * @return Enregistrer
     */
    public function setLaReservation(\MaisonLigues\croisiereBundle\Entity\Reservation $laReservation = null)
    {
        $this->laReservation = $laReservation;
    
        return $this;
    }

    /**
     * Get laReservation
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Reservation 
     */
    public function getLaReservation()
    {
        return $this->laReservation;
    }
}