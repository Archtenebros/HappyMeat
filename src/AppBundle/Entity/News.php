<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 */
class News extends Article
{
    /**
     * News constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
