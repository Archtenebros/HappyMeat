<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModifyController extends Controller
{
    public function blogAction()
    {
        //TODO blogModifyHandler
        return $this->render('@App/modify/blog.html.twig', array());
    }

    public function newsAction()
    {
        //TODO newsModifyHandler
        return $this->render('@App/modify/news.html.twig', array());
    }

    public function productAction()
    {
        //TODO productModifyHandler
        return $this->render('@App/modify/product.html.twig', array());
    }

    public function recipeAction()
    {
        //TODO recipeModifyHandler
        return $this->render('@App/modify/recipe.html.twig', array());
    }
}
