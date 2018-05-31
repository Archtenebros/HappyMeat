<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function showAction()
    {
        //TODO SearchHandler
        //Temporary return
        $products = $this->getDoctrine()->getRepository("AppBundle:Animal")->findAll();
        return $this->render('@App/product/show.html.twig', array(
            "products" => $products,
        ));
    }

    public function showDetailsAction($id)
    {
        return $this->render('@App/product/showdetails.html.twig', array(
            $this->getDoctrine()->getRepository("AppBundle:Animal")->find($id),
        ));
    }
}
