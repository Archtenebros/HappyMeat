<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="blog")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BlogRepository")
 */
class Blog extends Article
{
    /**
     * Blog constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
