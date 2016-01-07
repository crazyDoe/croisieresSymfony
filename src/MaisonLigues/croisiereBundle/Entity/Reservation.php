<?php

namespace MaisonLigues\croisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Reservation
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
    * @var Traversee $laTraversee
    * @ORM\ManyToOne(targetEntity="Traversee")
    */
    private $laTraversee;

    /**
    * @var Enregistrer $lesEnregistrements
    * @ORM\OneToMany(targetEntity="Enregistrer",mappedBy="laReservation",cascade={"persist"})
    */
    private $lesEnregistrements;



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
     * Set num
     *
     * @param string $num
     * @return Reservation
     */
    public function setNum($num)
    {
        $this->num = $num;
    
        return $this;
    }

    /**
     * Get num
     *
     * @return string 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Reservation
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
     * Set adresse
     *
     * @param string $adresse
     * @return Reservation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Reservation
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Reservation
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set laTraversee
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Traversee $laTraversee
     * @return Reservation
     */
    public function setLaTraversee(\MaisonLigues\croisiereBundle\Entity\Traversee $laTraversee = null)
    {
        $this->laTraversee = $laTraversee;
    
        return $this;
    }

    /**
     * Get laTraversee
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Traversee 
     */
    public function getLaTraversee()
    {
        return $this->laTraversee;
    }


    /**
     * Set lesEnregistrements
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Enregistrer $lesEnregistrements
     * @return Reservation
     */
    public function setLesEnregistrements(\MaisonLigues\croisiereBundle\Entity\Enregistrer $lesEnregistrements = null)
    {
        $this->lesEnregistrements = $lesEnregistrements;
    
        return $this;
    }

    /**
     * Get lesEnregistrements
     *
     * @return \MaisonLigues\croisiereBundle\Entity\Enregistrer 
     */
    public function getLesEnregistrements()
    {
        return $this->lesEnregistrements;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesEnregistrements = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lesEnregistrements
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Enregistrer $lesEnregistrements
     * @return Reservation
     */
    public function addLesEnregistrement(\MaisonLigues\croisiereBundle\Entity\Enregistrer $lesEnregistrements)
    {
        $this->lesEnregistrements[] = $lesEnregistrements;
    
        return $this;
    }

    /**
     * Remove lesEnregistrements
     *
     * @param \MaisonLigues\croisiereBundle\Entity\Enregistrer $lesEnregistrements
     */
    public function removeLesEnregistrement(\MaisonLigues\croisiereBundle\Entity\Enregistrer $lesEnregistrements)
    {
        $this->lesEnregistrements->removeElement($lesEnregistrements);
    }
}