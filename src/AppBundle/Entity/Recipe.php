<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeRepository")
 */
class Recipe extends Article
{

    /**
     * @var TypeAnimal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeAnimal")
     */
    private $typeAnimal;


    /**
     * Recipe constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set typeAnimal
     *
     * @param \AppBundle\Entity\TypeAnimal $typeAnimal
     *
     * @return Recipe
     */
    public function setTypeAnimal(\AppBundle\Entity\TypeAnimal $typeAnimal = null)
    {
        $this->typeAnimal = $typeAnimal;

        return $this;
    }

    /**
     * Get typeAnimal
     *
     * @return \AppBundle\Entity\TypeAnimal
     */
    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }
}
