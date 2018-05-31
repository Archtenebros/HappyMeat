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
     * @var ArrayCollection of Ingredient
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ingredient", mappedBy="recipe", cascade={"persist", "remove"})
     */
    private $ingredients;

    /**
     * Recipe constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->ingredients = new ArrayCollection();
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

    /**
     * Add ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return Recipe
     */
    public function addIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     */
    public function removeIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients->removeElement($ingredient);
    }

    /**
     * Get ingredients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
