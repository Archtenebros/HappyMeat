<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModifyController extends Controller
{
    public function blogAction()
    {
        return $this->render('@App/modify/blog.html.twig', array());
    }

    public function newsAction()
    {
        return $this->render('@App/modify/news.html.twig', array());
    }

    public function productAction()
    {
        return $this->render('@App/modify/product.html.twig', array());
    }

    public function recipeAction()
    {
        return $this->render('@App/modify/recipe.html.twig', array());
    }
}
