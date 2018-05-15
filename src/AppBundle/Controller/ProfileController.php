<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function informationAction()
    {
        return $this->render('@App/profile/information.html.twig', array());
    }

    public function photosAction()
    {
        return $this->render('@App/profile/photos.html.twig', array());
    }

    public function postsAction()
    {
        return $this->render('@App/profile/posts.html.twig', array());
    }

    public function showAction()
    {
        return $this->render('@App/profile/show.html.twig', array());
    }

    public function streamAction()
    {
        return $this->render('@App/profile/stream.html.twig', array());
    }
}
