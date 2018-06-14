<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 14/06/2018
 * Time: 14:18
 */

namespace MyUserBundle\Services;


use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

class RegisterConfirmationListener implements EventSubscriberInterface
{
    private $router;
    private $mailer;
    private $templating;
    private $mailer_user;

    public function __construct(UrlGeneratorInterface $router, \Swift_Mailer $mailer, Environment $templating, $mailer_user)
    {
        $this->router = $router;
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->mailer_user;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => array('onRegisterConfirmationSuccess', -10),
        );
    }

    public function onRegisterConfirmationSuccess(FormEvent $event)
    {
        /** @var $user \FOS\UserBundle\Model\UserInterface */
        $user = $event->getForm()->getData();

        $message = (new \Swift_Message('Hello Email'))
            ->setFrom($this->mailer_user)
            ->setTo($user->getEmail())
            ->setBody(
                $this->templating->render(
                    '@MyUser/Email/registration_confirmed.html.twig',
                    array('name' => $user->getUsername())
                ),
                'text/html'
            )
        ;

        $this->mailer->send($message);

        /**$url = $this->router->generate('home');

        $event->setResponse(new RedirectResponse($url));**/

    }

}