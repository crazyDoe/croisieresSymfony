<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liaison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MaisonLigues\croisiereBundle\Entity\LiaisonRepository")
 */
class Liaison
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
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;

    /**
    * @var Secteur $leSecteur
    * @ORM\ManyToOne(targetEntity="Secteur")
    */
    private $leSecteur;

    /**
    * @var Port $leDepart
    * @ORM\ManyToOne(targetEntity="Port")
    */
    private $leDepart;

    /**
    * @var Secteur $lArrive
    * @ORM\ManyToOne(targetEntity="Port")
    */
    private $lArrive;

    /**
    * @var Valeur $lesTraversses
    *
    * @ORM\OneToMany(targetEntity="Traversee",mappedBy="laLiaison")
    */
    private $lesTraversses;

    /**
    * @var Tarifer $lesTarifs
    * @ORM\OneToMany(targetEntity="Tarifer",mappedBy="laLiaison")
    */
    private $lesTarifs;



    public function __toString()
    {
        return $this->leDepart->getNom()." - ".$this->lArrive->getNom();
    }


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
     * Set distance
     *
     * @param integer $distance
     * @return Liaison
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    
        return $this;
    }

    /**
     * Get distance
     *
     * @return integer 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set idSecteur
     *
     * @param integer $idSecteur
     * @return Liaison
     */
    public function setIdSecteur($idSecteur)
    {
        $this->idSecteur = $idSecteur;
    
        return $this;
    }

    /**
     * Get idSecteur
     *
     * @return integer 
     */
    public function getIdSecteur()
    {
        return $this->idSecteur;
    }

    /**
     * Set idPortDepart
     *
     * @param integer $idPortDepart
     * @return Liaison
     */
    public function setIdPortDepart($idPortDepart)
    {
        $this->idPortDepart = $idPortDepart;
    
        return $this;
    }

    /**
     * Get idPortDepart
     *
     * @return integer 
     */
    public function getIdPortDepart()
    {
        return $this->idPortDepart;
    }

    /**
     * Set idPortArrive
     *
     * @param integer $idPortArrive
     * @return Liaison
     */
    public function setIdPortArrive($idPortArrive)
    {
        $this->idPortArrive = $idPortArrive;
    
        return $this;
    }

    /**
     * Get idPortArrive
     *
     * @return integer 
     */
    public function getIdPortArrive()
    {
        return $this->idPortArrive;
    }

    /**
     * Set leSecteur
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Secteur $leSecteur
     * @return Liaison
     */
    public function setLeSecteur(\MaisonLigues\croisiereBundle\Entity\Secteur $leSecteur = null)
    {
        $this->leSecteur = $leSecteur;
    
        return $this;
    }

    /**
     * Get leSecteur
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Secteur 
     */
    public function getLeSecteur()
    {
        return $this->leSecteur;
    }

    /**
     * Set leDepart
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Port $leDepart
     * @return Liaison
     */
    public function setLeDepart(\MaisonLigues\croisiereBundle\Entity\Port $leDepart = null)
    {
        $this->leDepart = $leDepart;
    
        return $this;
    }

    /**
     * Get leDepart
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Port 
     */
    public function getLeDepart()
    {
        return $this->leDepart;
    }

    /**
     * Set lArrive
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Port $lArrive
     * @return Liaison
     */
    public function setLArrive(\MaisonLigues\croisiereBundle\Entity\Port $lArrive = null)
    {
        $this->lArrive = $lArrive;
    
        return $this;
    }

    /**
     * Get lArrive
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Port 
     */
    public function getLArrive()
    {
        return $this->lArrive;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesTraversses = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lesTraversses
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses
     * @return Liaison
     */
    public function addLesTraversse(\MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses)
    {
        $this->lesTraversses[] = $lesTraversses;
    
        return $this;
    }

    /**
     * Remove lesTraversses
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses
     */
    public function removeLesTraversse(\MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses)
    {
        $this->lesTraversses->removeElement($lesTraversses);
    }

    /**
     * Get lesTraversses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLesTraversses()
    {
        return $this->lesTraversses;
    }

    /**
     * Set lesTraversses
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses
     * @return Liaison
     */
    public function setLesTraversses(\MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses = null)
    {
        $this->lesTraversses = $lesTraversses;
    
        return $this;
    }

    /**
     * Add lesTarifs
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Tarif $lesTarifs
     * @return Liaison
     */
    public function addLesTarif(\MaisonLigues\croisiereBundle\Entity\Tarifer $lesTarifs)
    {
        $this->lesTarifs[] = $lesTarifs;
    
        return $this;
    }

    /**
     * Remove lesTarifs
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Tarif $lesTarifs
     */
    public function removeLesTarif(\MaisonLigues\croisiereBundle\Entity\Tarifer $lesTarifs)
    {
        $this->lesTarifs->removeElement($lesTarifs);
    }

    /**
     * Get lesTarifs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLesTarifs()
    {
        return $this->lesTarifs;
    }
}