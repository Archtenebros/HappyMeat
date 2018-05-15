<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FavoriteController extends Controller
{
    public function allAction()
    {
        return $this->render('@App/favorite/all.html.twig', array());
    }
}
