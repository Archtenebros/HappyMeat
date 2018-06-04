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
use Doctrine\Common\Persistence\ObjectManager;

class OwnerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $owner = new Owner();
        $owner->setName("Jimmy");
        $owner->setEmail("test@test.dk");
        $owner->setUsername("test");
        $owner->setPassword("azerty");
        $owner->addRole("ROLE_OWNER");

        $manager->persist($owner);

        $manager->flush();

        $this->addReference('jimmy', $owner);
    }
}