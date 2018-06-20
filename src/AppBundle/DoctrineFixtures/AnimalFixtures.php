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
        $animal1->setName("Franklin");
        $animal1->setAge(2);
        $animal1->setWeight(125.5);

        $animal2 = new Animal();
        $animal2->setDate(new \DateTime());
        $animal2->setAuthor($this->getReference('jimmy'));
        $animal2->setTitle('Cow');
        $animal2->setContent('This is a cow');
        $animal2->setName("Bessie");
        $animal2->setAge(3);
        $animal2->setWeight(77);

        $animal3 = new Animal();
        $animal3->setDate(new \DateTime());
        $animal3->setAuthor($this->getReference('nathan'));
        $animal3->setTitle('Goat');
        $animal3->setContent('This is a goat');
        $animal3->setName("Billy");
        $animal3->setAge(5);
        $animal3->setWeight(50);

        $manager->persist($animal1);
        $manager->persist($animal2);
        $manager->persist($animal3);
        $manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }

}