<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function showAction()
    {
        return $this->render('@App/blog/show.html.twig', array(
            "blogs" => $this->getDoctrine()->getRepository("AppBundle:Blog")->findAll(),
        ));
    }

    public function showDetailsAction($id)
    {
        return $this->render('@App/blog/showdetails.html.twig', array(
            "blog" => $this->getDoctrine()->getRepository("AppBundle:Blog")->find($id),
        ));
    }
}
