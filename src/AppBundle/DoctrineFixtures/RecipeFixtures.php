<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 04/06/2018
 * Time: 15:38
 */

namespace AppBundle\DoctrineFixtures;


use AppBundle\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RecipeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $recipe1 = new Recipe();
        $recipe1->setDate(new \DateTime());
        $recipe1->setAuthor($this->getReference('jimmy'));
        $recipe1->setImage();
        $recipe1->setDescription("Preparation time: 5 minutes - cook time: 30 minutes - ready in: 35 minutes - diffuculty level: easy");
        $recipe1->setTitle('Barbecue dip');
        $recipe1->setContent(<<<HTML
Ingredients:
1/4 onion
2 cloves garlic
1/4 cup bourbon whiskey
1/4 teaspoon black pepper
1/2 teaspoon salt
1/2 cup ketchup
2 tablespoons tomato paste
2 tablespoons cider vinegar
2 tablespoons worcestershire sauce
1/4 cup brown sugar

Instructions:
1. Fry the minced onions and the garlic in a skillet with medium heat
 for 10 minutes or until onion is treansclucent 2. 
2. Add bourbon, black pepper, salt, ketchup, tomato paste, vinegar, worcestershire sauce and brown sugar
3. Let it boil up breathly and simmer for 20 minutes 
4. Run the sauce through a strainer if you prefer a smooth sauce
5. The sauce can be stored in the refrigerator up to 1 week
HTML
);
    }

    public function getDependencies()
    {
        return array(
            OwnerFixtures::class,
        );
    }
}