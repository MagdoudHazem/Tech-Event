<?php

namespace MaterielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiel
 *
 * @ORM\Table(name="materiel")
 * @ORM\Entity(repositoryClass="MaterielBundle\Repository\MaterielRepository")
 */
class Materiel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Stock")
     */
    private $typetable;

    /**
     * @var int
     *
     * @ORM\Column(name="nbtable", type="integer")
     */
    private $nbtable;

    /**
     * @var int
     *
     * @ORM\Column(name="nbchaise", type="integer")
     */
    private $nbchaise;

    /**
     * @var string
     *
     * @ORM\Column(name="typesalle", type="string", length=255)
     */
    private $typesalle;

    /**
     * @var string
     *
     * @ORM\Column(name="typelumiere", type="string", length=255)
     */
    private $typelumiere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemateriel", type="datetime")
     */
    private $datemateriel;
    /**
     * @ORM\PrePersist
     */
    public function onPrePersistSetRegistrationDate()
    {
        $this->datemateriel = new DateTime('now');
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typetable
     *
     * @param string $typetable
     *
     * @return Materiel
     */
    public function setTypetable($typetable)
    {
        $this->typetable = $typetable;

        return $this;
    }

    /**
     * Get typetable
     *
     * @return string
     */
    public function getTypetable()
    {
        return $this->typetable;
    }

    /**
     * Set nbtable
     *
     * @param integer $nbtable
     *
     * @return Materiel
     */
    public function setNbtable($nbtable)
    {
        $this->nbtable = $nbtable;

        return $this;
    }

    /**
     * Get nbtable
     *
     * @return int
     */
    public function getNbtable()
    {
        return $this->nbtable;
    }

    /**
     * Set nbchaise
     *
     * @param integer $nbchaise
     *
     * @return Materiel
     */
    public function setNbchaise($nbchaise)
    {
        $this->nbchaise = $nbchaise;

        return $this;
    }

    /**
     * Get nbchaise
     *
     * @return int
     */
    public function getNbchaise()
    {
        return $this->nbchaise;
    }

    /**
     * Set typesalle
     *
     * @param string $typesalle
     *
     * @return Materiel
     */
    public function setTypesalle($typesalle)
    {
        $this->typesalle = $typesalle;

        return $this;
    }

    /**
     * Get typesalle
     *
     * @return string
     */
    public function getTypesalle()
    {
        return $this->typesalle;
    }

    /**
     * Set typelumiere
     *
     * @param string $typelumiere
     *
     * @return Materiel
     */
    public function setTypelumiere($typelumiere)
    {
        $this->typelumiere = $typelumiere;

        return $this;
    }

    /**
     * Get typelumiere
     *
     * @return string
     */
    public function getTypelumiere()
    {
        return $this->typelumiere;
    }

    /**
     * Set datemateriel
     *
     * @param \DateTime $datemateriel
     *
     * @return Materiel
     */
    public function setDatemateriel($datemateriel)
    {
        $this->datemateriel = $datemateriel;

        return $this;
    }

    /**
     * Get datemateriel
     *
     * @return \DateTime
     */
    public function getDatemateriel()
    {
        return $this->datemateriel;
    }

    /**
     * @var \User
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @return \User
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @param \User $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

}

