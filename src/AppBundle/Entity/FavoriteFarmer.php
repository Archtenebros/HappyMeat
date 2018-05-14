<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FavoriteFarmer
 *
 * @ORM\Table(name="favorite_farmer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FavoriteFarmerRepository")
 */
class FavoriteFarmer extends Favorite
{

    /**
     * @var Owner
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Owner")
     */
    private $farmer;

    /**
     * FavoriteFarmer constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set farmer
     *
     * @param \AppBundle\Entity\Owner $farmer
     *
     * @return FavoriteFarmer
     */
    public function setFarmer(\AppBundle\Entity\Owner $farmer = null)
    {
        $this->farmer = $farmer;

        return $this;
    }

    /**
     * Get farmer
     *
     * @return \AppBundle\Entity\Owner
     */
    public function getFarmer()
    {
        return $this->farmer;
    }
}
