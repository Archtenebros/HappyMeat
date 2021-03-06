<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;

    /**
     * @var Localisation
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Localisation", cascade={"persist", "remove"})
     */
    private $localisation;

    /**
     * @var YoutubeChannel
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\YoutubeChannel", cascade={"REMOVE", "persist"})
     */
    private $youtubeChannel;

    /**
     * @var ArrayCollection of Image
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="uploader", cascade={"REMOVE", "persist"})
     */
    private $uploadedImages;

    public function __construct()
    {
        parent::__construct();
        $this->uploadedImages= new ArrayCollection();
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

    /**
     * Add uploadedImage
     *
     * @param \AppBundle\Entity\Image $uploadedImage
     *
     * @return Owner
     */
    public function addUploadedImage(\AppBundle\Entity\Image $uploadedImage)
    {
        $this->uploadedImages[] = $uploadedImage;

        return $this;
    }

    /**
     * Remove uploadedImage
     *
     * @param \AppBundle\Entity\Image $uploadedImage
     */
    public function removeUploadedImage(\AppBundle\Entity\Image $uploadedImage)
    {
        $this->uploadedImages->removeElement($uploadedImage);
    }

    /**
     * Get uploadedImages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUploadedImages()
    {
        return $this->uploadedImages;
    }
}
