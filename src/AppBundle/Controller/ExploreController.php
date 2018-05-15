<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExploreController extends Controller
{
    public function recipeShowAction()
    {
        return $this->render('@App/explore/recipe/show.html.twig', array());
    }

    public function recipeShowDetailsAction()
    {
        return $this->render('@App/explore/recipe/showdetails.html.twig', array());
    }

    public function aboutUsAction()
    {
        return $this->render('@App/explore/aboutus.html.twig', array());
    }

    public function newsletterAction()
    {
        return $this->render('@App/explore/newsletter.html.twig', array());
    }

    public function organicFarmingAction()
    {
        return $this->render('@App/explore/organicfarming.html.twig', array());
    }
}
