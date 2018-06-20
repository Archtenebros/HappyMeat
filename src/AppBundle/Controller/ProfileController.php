<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function informationAction($id)
    {
        return $this->render('@App/profile/information.html.twig', array(
            "owner" => $this->getDoctrine()->getRepository("AppBundle:Owner")->find($id),
        ));
    }

    public function photosAction($id)
    {
        return $this->render('@App/profile/photos.html.twig', array(
            "owner" => $this->getDoctrine()->getRepository("AppBundle:Owner")->find($id),
        ));
    }

    public function postsAction($id)
    {
        return $this->render('@App/profile/posts.html.twig', array(
            "owner" => $this->getDoctrine()->getRepository("AppBundle:Owner")->find($id),
        ));
    }

    public function showAction($id)
    {
        return $this->render('@App/profile/show.html.twig', array(
            "owner" => $this->getDoctrine()->getRepository("AppBundle:Owner")->find($id),
        ));
    }

    public function streamAction($id)
    {
        return $this->render('@App/profile/stream.html.twig', array(
            "owner" => $this->getDoctrine()->getRepository("AppBundle:Owner")->find($id),
        ));
    }

    public function myproductsAction()
    {
        return $this->render('@App/profile/myproducts.html.twig', array(
            "products" => $this->getDoctrine()->getRepository('AppBundle:Animal')->findBy(array(
                "author" => $this->getUser()->getId()
            ))
        ));
    }
}
