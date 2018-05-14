<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentBasket
 *
 * @ORM\Table(name="payment_basket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentBasketRepository")
 */
class PaymentBasket
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
     * @var ArrayCollection of Animal
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Animal")
     * @ORM\JoinTable(name="paymentbasket_animal",
     *      joinColumns={@ORM\JoinColumn(name="paymentbasket_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="animal_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $animals;

    /**
     * PaymentBasket constructor.
     */
    public function __construct()
    {
        $this->animals = new ArrayCollection();
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
     * Add animal
     *
     * @param \AppBundle\Entity\Animal $animal
     *
     * @return PaymentBasket
     */
    public function addAnimal(\AppBundle\Entity\Animal $animal)
    {
        $this->animals[] = $animal;

        return $this;
    }

    /**
     * Remove animal
     *
     * @param \AppBundle\Entity\Animal $animal
     */
    public function removeAnimal(\AppBundle\Entity\Animal $animal)
    {
        $this->animals->removeElement($animal);
    }

    /**
     * Get animals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnimals()
    {
        return $this->animals;
    }
}
