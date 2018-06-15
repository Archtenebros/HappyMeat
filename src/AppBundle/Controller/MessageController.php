<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Conversation;
use AppBundle\Entity\Message;
use AppBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller
{

// $repository = $this->get('fos_message.repository');
// $sender = $this->get('fos_message.sender');

    public function allAction()
    {
        $repository = $this->get('fos_message.repository');

        $conversations = $repository->getPersonConversations($this->getUser());

        return $this->render('@App/message/all.html.twig', array(
            'conversations' => $conversations,
        ));
    }

    public function discussAction(Request $request, $id)
    {
        $repository = $this->get('fos_message.repository');

        $conversation = $repository->getConversation($id);

        // Check access
        if (! $conversation->isPersonInConversation($this->getUser())) {
            throw new AccessDeniedException();
        }

        $form = $this->createForm(MessageType::class, null);
        $form->handleRequest();

        if($form->isSubmitted()&&$form->isValid())
        {
            $data = $form->getData();
            $sender = $this->get('fos_message.sender');
            $sender->sendMessage($conversation, $this->getUser(), $data['content']);
        }

        $form = $this->createForm(MessageType::class, null);
        $messages = $repository->getMessages($conversation);

        return $this->render('@App/message/discuss.html.twig', array(
            "messages" => $messages,
            "form" => $form
        ));
    }

    /**
     * Built like an api
     *
     * @param Request $request
     * @param $idReceiver
     * @return Response 500 if user not found, 403 if user not logged, 200 if message sent
     */
    public function startConversationAction(Request $request, $idReceiver)
    {
        $receiver = $this->getDoctrine()->getRepository('AppBundle:User')->find($idReceiver);

        if($receiver == null)
            return new Response("User not found !", 500);

        $user = $this->getUser();

        if($user == null)
            return new Response("User not authenticated !", 403);

        $sender = $this->get('fos_message.sender');
        $repository = $this->get('fos_message.repository');
        $conversations = $repository->getPersonConversations($this->getUser());
        $thread = null;
        foreach ($conversations as $conversation)
            /** @var \FOS\Message\Model\Conversation $conversation */
            if($conversation->isPersonInConversation($receiver))
                $thread = $conversation;

        if($thread == null)
            $sender->startConversation($user, $receiver, $request->get('content'));
        else
            $sender->sendMessage($thread, $user, $request->get('content'));

        return new Response('Message sent !', 200);
    }
}
