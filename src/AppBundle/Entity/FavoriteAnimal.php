<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FavoriteAnimal
 *
 * @ORM\Table(name="favorite_animal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FavoriteAnimalRepository")
 */
class FavoriteAnimal extends Favorite
{

    /**
     * @var Animal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Animal")
     */
    private $animal;

    /**
     * FavoriteAnimal constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set animal
     *
     * @param \AppBundle\Entity\Animal $animal
     *
     * @return FavoriteAnimal
     */
    public function setAnimal(\AppBundle\Entity\Animal $animal = null)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return \AppBundle\Entity\Animal
     */
    public function getAnimal()
    {
        return $this->animal;
    }
}
