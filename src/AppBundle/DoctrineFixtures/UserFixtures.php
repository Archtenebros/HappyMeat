<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 04/06/2018
 * Time: 12:26
 */

namespace AppBundle\DoctrineFixtures;


use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class UserFixtures extends Fixture implements OrderedFixtureInterface
{
    private $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail("test5@test.dk");
        $user->setUsername("melissa01");
        $user->setPlainPassword("azerty");
        $user->addRole("ROLE_USER");

        $event = new UserEvent($user);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $user2 = new User();
        $user2->setEmail("test6@test.dk");
        $user2->setUsername("arthur01");
        $user2->setPlainPassword("azerty");
        $user2->addRole("ROLE_USER");

        $event = new UserEvent($user2);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $user3 = new User();
        $user3->setEmail("test7@test.dk");
        $user3->setUsername("cleo01");
        $user3->setPlainPassword("azerty");
        $user3->addRole("ROLE_USER");

        $event = new UserEvent($user3);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $user4 = new User();
        $user4->setEmail("test8@test.dk");
        $user4->setUsername("yves01");
        $user4->setPlainPassword("azerty");
        $user4->addRole("ROLE_USER");

        $event = new UserEvent($user4);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $user->setEnabled(true);
        $user2->setEnabled(true);
        $user3->setEnabled(true);
        $user4->setEnabled(true);

        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->persist($user4);

        $manager->flush();

        $this->addReference('melissa', $user);
        $this->addReference('arthur', $user2);
        $this->addReference('cleo', $user3);
        $this->addReference('yves', $user4);
    }

    public function getOrder()
    {
        return 2;
    }
}