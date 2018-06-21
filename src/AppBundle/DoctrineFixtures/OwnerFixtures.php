<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 04/06/2018
 * Time: 12:26
 */

namespace AppBundle\DoctrineFixtures;


use AppBundle\Entity\Owner;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class OwnerFixtures extends Fixture implements OrderedFixtureInterface
{
    private $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function load(ObjectManager $manager)
    {
        $owner = new Owner();
        $owner->setName("Jimmy HUYHN");
        $owner->setEmail("test@test.dk");
        $owner->setUsername("jimmy01");
        $owner->setPlainPassword("azerty");
        $owner->setImage("assets/img/profile/farmer1.jpg");
        $owner->addRole("ROLE_OWNER");
        $owner->setEnabled(true);

        $event = new UserEvent($owner);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $owner2 = new Owner();
        $owner2->setName("Nathan GRAY");
        $owner2->setEmail("test2@test.dk");
        $owner2->setUsername("nathan01");
        $owner2->setPlainPassword("azerty");
        $owner2->setImage("assets/img/profile/farmer2.jpg");
        $owner2->addRole("ROLE_OWNER");
        $owner2->setEnabled(true);

        $event = new UserEvent($owner2);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $owner3 = new Owner();
        $owner3->setName("John CENA");
        $owner3->setEmail("test3@test.dk");
        $owner3->setUsername("john01");
        $owner3->setPlainPassword("azerty");
        $owner3->setImage("assets/img/profile/farmer3.jpg");
        $owner3->addRole("ROLE_OWNER");
        $owner3->setEnabled(true);

        $event = new UserEvent($owner3);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $owner4 = new Owner();
        $owner4->setName("Bering CALLUM");
        $owner4->setEmail("test4@test.dk");
        $owner4->setUsername("bering01");
        $owner4->setPlainPassword("azerty");
        $owner4->setImage("assets/img/profile/farmer4.jpg");
        $owner4->addRole("ROLE_OWNER");
        $owner4->setEnabled(true);

        $event = new UserEvent($owner4);
        $this->dispatcher->dispatch(FOSUserEvents::USER_CREATED, $event);

        $manager->persist($owner);
        $manager->persist($owner2);
        $manager->persist($owner3);
        $manager->persist($owner4);

        $manager->flush();

        $this->addReference('jimmy', $owner);
        $this->addReference('nathan', $owner2);
        $this->addReference('john', $owner3);
        $this->addReference('bering', $owner4);
    }

    public function getOrder()
    {
        return 1;
    }
}