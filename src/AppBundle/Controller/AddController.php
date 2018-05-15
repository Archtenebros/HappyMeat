<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddController extends Controller
{
    public function blogAction()
    {
        return $this->render('@App/add/blog.html.twig', array());
    }

    public function newsAction()
    {
        return $this->render('@App/add/news.html.twig', array());
    }

    public function productAction()
    {
        return $this->render('@App/add/product.html.twig', array());
    }

    public function recipeAction()
    {
        return $this->render('@App/add/recipe.html.twig', array());
    }
}
