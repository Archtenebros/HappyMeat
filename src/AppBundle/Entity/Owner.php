<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Owner
 *
 * @ORM\Table(name="owner")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OwnerRepository")
 */
class Owner extends User
{

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * @var Localisation
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Localisation", cascade={"persist", "remove"})
     */
    private $localisation;

    /**
     * @var ArrayCollection of Animal
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Animal", mappedBy="owner", cascade={"persist", "remove"})
     */
    private $animals;

    /**
     * @var ArrayCollection of Conversation
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Conversation", mappedBy="owner")
     */
    private $conversationsWithUser;

    /**
     * @var YoutubeChannel
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\YoutubeChannel")
     */
    private $youtubeChannel;

    public function __construct()
    {
        parent::__construct();
        $this->animals = new ArrayCollection();
        $this->conversationsWithUser = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Owner
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
     * Set image
     *
     * @param string $image
     *
     * @return Owner
     */
    public function setImage($image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set localisation
     *
     * @param \AppBundle\Entity\Localisation $localisation
     *
     * @return Owner
     */
    public function setLocalisation(\AppBundle\Entity\Localisation $localisation = null)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return \AppBundle\Entity\Localisation
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Add animal
     *
     * @param \AppBundle\Entity\Animal $animal
     *
     * @return Owner
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

    /**
     * Add conversationsWithUser
     *
     * @param \AppBundle\Entity\Conversation $conversationsWithUser
     *
     * @return Owner
     */
    public function addConversationsWithUser(\AppBundle\Entity\Conversation $conversationsWithUser)
    {
        $this->conversationsWithUser[] = $conversationsWithUser;

        return $this;
    }

    /**
     * Remove conversationsWithUser
     *
     * @param \AppBundle\Entity\Conversation $conversationsWithUser
     */
    public function removeConversationsWithUser(\AppBundle\Entity\Conversation $conversationsWithUser)
    {
        $this->conversationsWithUser->removeElement($conversationsWithUser);
    }

    /**
     * Get conversationsWithUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConversationsWithUser()
    {
        return $this->conversationsWithUser;
    }

    /**
     * Set youtubeChannel
     *
     * @param \AppBundle\Entity\YoutubeChannel $youtubeChannel
     *
     * @return Owner
     */
    public function setYoutubeChannel(\AppBundle\Entity\YoutubeChannel $youtubeChannel = null)
    {
        $this->youtubeChannel = $youtubeChannel;

        return $this;
    }

    /**
     * Get youtubeChannel
     *
     * @return \AppBundle\Entity\YoutubeChannel
     */
    public function getYoutubeChannel()
    {
        return $this->youtubeChannel;
    }
}
