<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contenir
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
     * @ORM\Column(name="capaciteMax", type="integer")
     */
    private $capaciteMax;

     /**
    * @var Bateau $leBateau
    * @ORM\ManyToOne(targetEntity="Bateau",inversedBy="leContenant")
    */
    private $leBateau;

    /**
    * @var laCategorie $Categorie
    * @ORM\ManyToOne(targetEntity="Categorie",inversedBy="leContenant")
    */
    private $laCategorie;

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
     * Set capaciteMax
     *
     * @param integer $capaciteMax
     * @return Contenir
     */
    public function setCapaciteMax($capaciteMax)
    {
        $this->capaciteMax = $capaciteMax;
    
        return $this;
    }

    /**
     * Get capaciteMax
     *
     * @return integer 
     */
    public function getCapaciteMax()
    {
        return $this->capaciteMax;
    }

    /**
     * Set leBateau
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Bateau $leBateau
     * @return Contenir
     */
    public function setLeBateau(\MaisonLigues\croisiereBundle\Entity\Bateau $leBateau = null)
    {
        $this->leBateau = $leBateau;
    
        return $this;
    }

    /**
     * Get leBateau
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Bateau 
     */
    public function getLeBateau()
    {
        return $this->leBateau;
    }

    /**
     * Set laCategorie
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie
     * @return Contenir
     */
    public function setLaCategorie(\MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie = null)
    {
        $this->laCategorie = $laCategorie;
    
        return $this;
    }

    /**
     * Get laCategorie
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Categorie 
     */
    public function getLaCategorie()
    {
        return $this->laCategorie;
    }
}