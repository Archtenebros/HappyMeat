<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function showAction()
    {
        return $this->render('@App/product/show.html.twig', array());
    }

    public function showDetailsAction()
    {
        return $this->render('@App/product/showdetails.html.twig', array());
    }
}
