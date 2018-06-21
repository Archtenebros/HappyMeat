<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnimalRepository")
 */
class Animal extends Article
{

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float")
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var TypeAnimal
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\TypeAnimal")
     */
    private $type;

    /**
     * Animal constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Animal
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Animal
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return Animal
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\TypeAnimal $type
     *
     * @return Animal
     */
    public function setType(\AppBundle\Entity\TypeAnimal $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\TypeAnimal
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Animal
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }
}
