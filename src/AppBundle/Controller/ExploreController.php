<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExploreController extends Controller
{
    public function recipeShowAction()
    {
        return $this->render('@App/explore/recipe/show.html.twig', array(
            "recipes" => $this->getDoctrine()->getRepository("AppBundle:Recipe")->findAll(),
        ));
    }

    public function recipeShowDetailsAction($id)
    {
        return $this->render('@App/explore/recipe/showdetails.html.twig', array(
            "recipe" => $this->getDoctrine()->getRepository("AppBundle:Recipe")->find($id),
        ));
    }

    public function aboutUsAction()
    {
        return $this->render('@App/explore/aboutus.html.twig', array());
    }

    public function newsletterAction()
    {
        return $this->render('@App/explore/newsletter.html.twig', array(
            "news" => $this->getDoctrine()->getRepository("AppBundle:News")->findAll(),
        ));
    }

    public function organicFarmingAction()
    {
        return $this->render('@App/explore/organicfarming.html.twig', array());
    }
}
