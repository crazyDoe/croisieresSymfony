<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Categorie
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
     * @ORM\Column(name="lettre", type="string", length=1)
     */
    private $lettre;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
    * @var Contenir $leContenant
    * @ORM\OneToMany(targetEntity="Contenir",mappedBy="laCategorie")
    */
    private $leContenant;

    /**
    * @var Valeur $lesTypes
    *
    * @ORM\OneToMany(targetEntity="Type",mappedBy="laCategorie")
    */
    private $lesTypes;




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
     * Set lettre
     *
     * @param string $lettre
     * @return Categorie
     */
    public function setLettre($lettre)
    {
        $this->lettre = $lettre;
    
        return $this;
    }

    /**
     * Get lettre
     *
     * @return string 
     */
    public function getLettre()
    {
        return $this->lettre;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Categorie
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
        $this->leContenant = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add leContenant
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Contenir $leContenant
     * @return Categorie
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

    /**
     * Set lesTypes
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Type $lesTypes
     * @return Categorie
     */
    public function setLesTypes(\MaisonLigues\croisiereBundle\Entity\Type $lesTypes = null)
    {
        $this->lesTypes = $lesTypes;
    
        return $this;
    }

    /**
     * Get lesTypes
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Type 
     */
    public function getLesTypes()
    {
        return $this->lesTypes;
    }

    /**
     * Add lesTypes
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Type $lesTypes
     * @return Categorie
     */
    public function addLesType(\MaisonLigues\croisiereBundle\Entity\Type $lesTypes)
    {
        $this->lesTypes[] = $lesTypes;
    
        return $this;
    }

    /**
     * Remove lesTypes
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Type $lesTypes
     */
    public function removeLesType(\MaisonLigues\croisiereBundle\Entity\Type $lesTypes)
    {
        $this->lesTypes->removeElement($lesTypes);
    }
}