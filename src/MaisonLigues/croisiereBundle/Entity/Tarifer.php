<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tarifer
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
     * @var float
     *
     * @ORM\Column(name="Tarif", type="float")
     */
    private $tarif;

    /**
    * @var leType $Type
    * @ORM\ManyToOne(targetEntity="Type",inversedBy="leTarif")
    */
    private $leType;

     /**
    * @var laLiaison $Liaison
    * @ORM\ManyToOne(targetEntity="Liaison",inversedBy="leTarif")
    */
    private $laLiaison;


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
     * Set tarif
     *
     * @param float $tarif
     * @return Tarifer
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    
        return $this;
    }

    /**
     * Get tarif
     *
     * @return float 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set leType
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Type $leType
     * @return Tarifer
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
     * Set laLiaison
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Liaison $laLiaison
     * @return Tarifer
     */
    public function setLaLiaison(\MaisonLigues\croisiereBundle\Entity\Liaison $laLiaison = null)
    {
        $this->laLiaison = $laLiaison;
    
        return $this;
    }

    /**
     * Get laLiaison
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Liaison 
     */
    public function getLaLiaison()
    {
        return $this->laLiaison;
    }
}