<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function showAction()
    {
        return $this->render('@App/blog/show.html.twig', array());
    }

    public function showDetailsAction()
    {
        return $this->render('@App/blog/showdetails.html.twig', array());
    }
}
