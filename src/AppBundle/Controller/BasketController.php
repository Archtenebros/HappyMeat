<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BasketController extends Controller
{
    public function allAction()
    {
        return $this->render('@App/basket/all.html.twig', array());
    }

    public function payAction()
    {
        return $this->render('@App/basket/pay.html.twig', array());
    }
}
