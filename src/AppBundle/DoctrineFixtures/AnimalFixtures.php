<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 20/06/2018
 * Time: 22:08
 */

namespace AppBundle\DoctrineFixtures;


use AppBundle\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AnimalFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $animal1 = new Animal();
        $animal1->setDate(new \DateTime());
        $animal1->setAuthor($this->getReference('jimmy'));
        $animal1->setTitle('Turtle');
        $animal1->setContent('This is a turtle');

        $manager->persist($animal1);
        $manager->flush();
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
    }

}