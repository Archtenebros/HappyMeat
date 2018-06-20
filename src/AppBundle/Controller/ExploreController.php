<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Recipe;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
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

    public function howItWorksAction(){
        return $this->render('@App/explore/howitworks.html.twig');
    }

    public function aboutUsAction()
    {
        return $this->render('@App/explore/aboutus.html.twig', array());
    }

    public function organicFarmingAction()
    {
        return $this->render('@App/explore/organicfarming.html.twig', array());
    }
}
