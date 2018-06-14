<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Conversation;
use AppBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MessageController extends Controller
{
    public function allAction()
    {
        $conversationRepository = $this->getDoctrine()->getRepository('AppBundle:Conversation');

        $conversations = array_merge(
            $conversationRepository->findBy(array('user1' => $this->getUser()->getId())),
            $conversationRepository->findBy(array('user2' => $this->getUser()->getId()))
        );

        return $this->render('@App/message/all.html.twig', array(
            'conversations' => $conversations,
        ));
    }

    public function discussAction(Request $request, $id)
    {
        $message = new Message();
        $form = $this->createForm('AppBundle\Form\MessageType', $message);
        $form->handleRequest($request);

        $doctrine = $this->getDoctrine();
        $conversation = $doctrine->getRepository('AppBundle:Conversation')->findOneBy(array(
            'user1' => $this->getUser(),
            'user2' => $doctrine->getRepository('AppBundle:User')->find($id)
        ));

        if($conversation == null
            && $conversation = $doctrine->getRepository('AppBundle:Conversation')->findOneBy(array(
                    'user2' => $this->getUser(),
                    'user1' => $doctrine->getRepository('AppBundle:User')->find($id)
                ))==null)
        {
            $conversation = new Conversation();
            $conversation->setUser1($this->getUser());
            $conversation->setUser2($doctrine->getRepository('AppBundle:User')->find($id));
        }

        $em = $doctrine->getManager();

        if($form->isSubmitted()&&$form->isValid())
        {
            $message->setDate(new \DateTime());
            $conversation->addMessage($message);

            $em->persist($conversation);
            $em->persist($message);

            $em->flush();
        }

        return $this->render('@App/message/discuss.html.twig', array(
            'conversation' => $conversation,
            'form' => $form->createView(),
        ));
    }
}
