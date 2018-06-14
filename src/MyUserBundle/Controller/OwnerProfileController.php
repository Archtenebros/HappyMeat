<?php

namespace MyUserBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use MyUserBundle\Form\OwnerType;
use MyUserBundle\Model\OwnerManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class OwnerProfileController extends Controller
{
    public function editAction(Request $request)
    {
        $user = $this->getUser();

        /** @var $userManager OwnerManager */
        $userManager = $this->get('fos_user.owner_manager');
        /** @var $dispatcher EventDispatcherInterface */
        $eventDispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $eventDispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $this->createForm(OwnerType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid())
        {
            $event = new FormEvent($form, $request);
            $eventDispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $eventDispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('@MyUser/Profile/edit_farmer.html.twig', array(
            'form' => $form->createView()
        ));

    }
}
