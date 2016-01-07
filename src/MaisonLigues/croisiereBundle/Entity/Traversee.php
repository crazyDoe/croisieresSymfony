<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traversee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MaisonLigues\croisiereBundle\Entity\TraverseeRepository")
 */
class Traversee
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=20)
     */
    private $heure;

    /**
    * @var Liaison $laLiaison
    * @ORM\ManyToOne(targetEntity="Liaison",inversedBy="LesTraversees")
    */
    private $laLiaison;

    /**
    * @var Bateau $leBateau
    * @ORM\ManyToOne(targetEntity="Bateau")
    */
    private $leBateau;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Traversee
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param string $heure
     * @return Traversee
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    
        return $this;
    }

    /**
     * Get heure
     *
     * @return string 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set idLiaison
     *
     * @param integer $idLiaison
     * @return Traversee
     */
    public function setIdLiaison($idLiaison)
    {
        $this->idLiaison = $idLiaison;
    
        return $this;
    }

    /**
     * Get idLiaison
     *
     * @return integer 
     */
    public function getIdLiaison()
    {
        return $this->idLiaison;
    }

    /**
     * Set idBateau
     *
     * @param integer $idBateau
     * @return Traversee
     */
    public function setIdBateau($idBateau)
    {
        $this->idBateau = $idBateau;
    
        return $this;
    }

    /**
     * Get idBateau
     *
     * @return integer 
     */
    public function getIdBateau()
    {
        return $this->idBateau;
    }

    /**
     * Set laLiaison
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Liaison $laLiaison
     * @return Traversee
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

    /**
     * Set leBateau
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Bateau $leBateau
     * @return Traversee
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
}