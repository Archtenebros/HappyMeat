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

class UserFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $owner = new User();
        $owner->setEmail("test5@test.dk");
        $owner->setUsername("melissa01");
        $owner->setPassword("azerty");
        $owner->addRole("ROLE_USER");

        $owner2 = new User();
        $owner2->setEmail("test6@test.dk");
        $owner2->setUsername("arthur01");
        $owner2->setPassword("azerty");
        $owner2->addRole("ROLE_USER");

        $owner3 = new User();
        $owner3->setEmail("test7@test.dk");
        $owner3->setUsername("cleo01");
        $owner3->setPassword("azerty");
        $owner3->addRole("ROLE_USER");

        $owner4 = new User();
        $owner4->setEmail("test8@test.dk");
        $owner4->setUsername("yves01");
        $owner4->setPassword("azerty");
        $owner4->addRole("ROLE_USER");

        $manager->persist($owner);
        $manager->persist($owner2);
        $manager->persist($owner3);
        $manager->persist($owner4);

        $manager->flush();

        $this->addReference('melissa', $owner);
        $this->addReference('arthur', $owner2);
        $this->addReference('cleo', $owner3);
        $this->addReference('yves', $owner4);
    }

    public function getOrder()
    {
        return 2;
    }
}