<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessageController extends Controller
{
    public function allAction()
    {
        return $this->render('@App/message/all.html.twig', array());
    }

    public function discussAction()
    {
        //TODO addMessageHandler
        return $this->render('@App/message/discuss.html.twig', array());
    }
}
