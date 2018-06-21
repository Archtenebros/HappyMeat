<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
        $user = $this->getDoctrine()->getRepository("AppBundle:Owner")->find($id);
        if($user == null)
            return new Response("User not found", 404);
        return $this->render('@App/profile/show.html.twig', array(
            "owner" => $user,
            "posts" => $this->getDoctrine()->getRepository("AppBundle:Blog")->findBy(array('author' => $user->getId())),
            "recipes" => $this->getDoctrine()->getRepository('AppBundle:Recipe')->findBy(array('author' => $user->getId())),
            "products" => $this->getDoctrine()->getRepository('AppBundle:Animal')->findBy(array('author' => $user->getId()))
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
