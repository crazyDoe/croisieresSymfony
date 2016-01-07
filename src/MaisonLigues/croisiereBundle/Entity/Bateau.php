<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateau
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MaisonLigues\croisiereBundle\Entity\BateauRepository")
 */
class Bateau
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
    * @var Contenir $leContenant
    * @ORM\OneToMany(targetEntity="Contenir",mappedBy="leBateau")
    */
    private $leContenant;


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
     * Set nom
     *
     * @param string $nom
     * @return Bateau
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->leContenant = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add leContenant
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Contenir $leContenant
     * @return Bateau
     */
    public function addLeContenant(\MaisonLigues\croisiereBundle\Entity\Contenir $leContenant)
    {
        $this->leContenant[] = $leContenant;
    
        return $this;
    }

    /**
     * Remove leContenant
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Contenir $leContenant
     */
    public function removeLeContenant(\MaisonLigues\croisiereBundle\Entity\Contenir $leContenant)
    {
        $this->leContenant->removeElement($leContenant);
    }

    /**
     * Get leContenant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLeContenant()
    {
        return $this->leContenant;
    }
}