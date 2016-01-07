<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Type
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
    * @var Valeur $laCategorie
    *
    * @ORM\ManyToOne(targetEntity="Categorie",inversedBy="leType")
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
     * Set libelle
     *
     * @param string $libelle
     * @return Type
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->laCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add laCategorie
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie
     * @return Type
     */
    public function addLaCategorie(\MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie)
    {
        $this->laCategorie[] = $laCategorie;
    
        return $this;
    }

    /**
     * Remove laCategorie
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie
     */
    public function removeLaCategorie(\MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie)
    {
        $this->laCategorie->removeElement($laCategorie);
    }

    /**
     * Get laCategorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLaCategorie()
    {
        return $this->laCategorie;
    }

    /**
     * Set laCategorie
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie
     * @return Type
     */
    public function setLaCategorie(\MaisonLigues\croisiereBundle\Entity\Categorie $laCategorie = null)
    {
        $this->laCategorie = $laCategorie;
    
        return $this;
    }
}