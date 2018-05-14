<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({
        "user" = "User",
 *      "owner" = "Owner"
 * })
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var ArrayCollection of Review
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Review", mappedBy="user")
     */
    private $reviews;

    /**
     * @var ArrayCollection of Favorite
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Favorite", mappedBy="user")
     */
    private $favorites;

    /**
     * @var PaymentBasket
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PaymentBasket")
     */
    private $paymentBasket;

    /**
     * @var ArrayCollection of Conversation
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Conversation", mappedBy="user")
     */
    private $conversationsWithOwner;

    public function __construct()
    {
        parent::__construct();
        $this->reviews = new ArrayCollection();
        $this->favorites = new ArrayCollection();
        $this->conversationsWithOwner = new ArrayCollection();
    }

    /**
     * Add review
     *
     * @param \AppBundle\Entity\Review $review
     *
     * @return User
     */
    public function addReview(\AppBundle\Entity\Review $review)
    {
        $this->reviews[] = $review;

        return $this;
    }

    /**
     * Remove review
     *
     * @param \AppBundle\Entity\Review $review
     */
    public function removeReview(\AppBundle\Entity\Review $review)
    {
        $this->reviews->removeElement($review);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add favorite
     *
     * @param \AppBundle\Entity\Favorite $favorite
     *
     * @return User
     */
    public function addFavorite(\AppBundle\Entity\Favorite $favorite)
    {
        $this->favorites[] = $favorite;

        return $this;
    }

    /**
     * Remove favorite
     *
     * @param \AppBundle\Entity\Favorite $favorite
     */
    public function removeFavorite(\AppBundle\Entity\Favorite $favorite)
    {
        $this->favorites->removeElement($favorite);
    }

    /**
     * Get favorites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * Set paymentBasket
     *
     * @param \AppBundle\Entity\PaymentBasket $paymentBasket
     *
     * @return User
     */
    public function setPaymentBasket(\AppBundle\Entity\PaymentBasket $paymentBasket = null)
    {
        $this->paymentBasket = $paymentBasket;

        return $this;
    }

    /**
     * Get paymentBasket
     *
     * @return \AppBundle\Entity\PaymentBasket
     */
    public function getPaymentBasket()
    {
        return $this->paymentBasket;
    }

    /**
     * Add conversationsWithOwner
     *
     * @param \AppBundle\Entity\Conversation $conversationsWithOwner
     *
     * @return User
     */
    public function addConversationsWithOwner(\AppBundle\Entity\Conversation $conversationsWithOwner)
    {
        $this->conversationsWithOwner[] = $conversationsWithOwner;

        return $this;
    }

    /**
     * Remove conversationsWithOwner
     *
     * @param \AppBundle\Entity\Conversation $conversationsWithOwner
     */
    public function removeConversationsWithOwner(\AppBundle\Entity\Conversation $conversationsWithOwner)
    {
        $this->conversationsWithOwner->removeElement($conversationsWithOwner);
    }

    /**
     * Get conversationsWithOwner
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConversationsWithOwner()
    {
        return $this->conversationsWithOwner;
    }
}
