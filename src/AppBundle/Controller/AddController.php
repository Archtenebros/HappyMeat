<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddController extends Controller
{
    public function blogAction()
    {
        //TODO blogAddHandler
        return $this->render('@App/add/blog.html.twig', array());
    }

    public function newsAction()
    {
        //TODO newsAddHandler
        return $this->render('@App/add/news.html.twig', array());
    }

    public function productAction()
    {
        //TODO productAddHandler
        return $this->render('@App/add/product.html.twig', array());
    }

    public function recipeAction()
    {
        //TODO recipeAddHandler
        return $this->render('@App/add/recipe.html.twig', array());
    }
}
