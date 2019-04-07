<?php

namespace MaterialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MaterialBundle\Enum\MaterielTypeEnum;

/**
 * Material
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="material")
 * @ORM\Entity(repositoryClass="MaterialBundle\Repository\MaterialRepository")
 */
class Material
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
     * @ORM\Column(name="typetable", type="string", length=100)
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
     * @ORM\Column(name="typesalle", type="string", length=100)
     */
    private $typesalle;

    /**
     * @var string
     *
     * @ORM\Column(name="typelumiere", type="string", length=100)
     */
    private $typelumiere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @ORM\PrePersist
     */
    public function onPrePersistSetRegistrationDate()
    {
        $this->created_at = new \DateTime();
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
     * @return Material
     */
    public function setTypetable($typetable)
    {
        if (!in_array($typetable, MaterielTypeEnum::getAvailableTableTypes())) {
            throw new \InvalidArgumentException("Invalid type");
        }

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
     * @return Material
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
     * @return Material
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
     * @return Material
     */
    public function setTypesalle($typesalle)
    {
        if (!in_array($typesalle, MaterielTypeEnum::getAvailableSalleTypes())) {
            throw new \InvalidArgumentException("Invalid type");
        }

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
     * @return Material
     */
    public function setTypelumiere($typelumiere)
    {
        if (!in_array($typelumiere, MaterielTypeEnum::getAvailableLumiereTypes())) {
            throw new \InvalidArgumentException("Invalid type");
        }

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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Material
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}

