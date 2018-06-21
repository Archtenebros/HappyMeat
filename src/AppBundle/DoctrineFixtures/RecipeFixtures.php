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
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RecipeFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $recipe1 = new Recipe();
        $recipe1->setDate(new \DateTime());
        $recipe1->setAuthor($this->getReference('jimmy'));
        $recipe1->setDescription("Preparation time: 5 minutes - cook time: 30 minutes - ready in: 35 minutes - difficulty level: easy");
        $recipe1->setTitle('Barbecue dip');
        $recipe1->setImage('assets/img/article/recipe1.jpg');
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

        $recipe2 = new Recipe();
        $recipe2->setDate(new \DateTime());
        $recipe2->setAuthor($this->getReference('melissa'));
        $recipe2->setDescription("Preparation time: 20 minutes - cook time: 4h - ready in: 16h 20minutes - difficulty level: middle");
        $recipe2->setTitle('Spare rips');
        $recipe2->setImage('assets/img/article/recipe2.jpg');
        $recipe2->setContent(<<<HTML
Ingredients:
1 cup brown sugar
1 tablespoon chilli powder
1 tablespoon salt
1 tablespoon onion powder
4 cloves garlic
1 tablespoon cayenne
1 tablespoon black pepper
2 tablespoons sweet paprika
2 racks pork spareribs, fat trimmed
1 cup beer
1 tablespoon honey
3 tablespoons worcestershire sauce
1 tablespoon mustard

Instructions: 
1. Mix the brown sugar and all spices in a bowl. Rub both sides of the pork spareribs with the brown suagr mixture. Place the spareribs in a 9x13-inch baking pan; cover and refrigerate over night
2. Preheat an oven to 250 degrees F (120 degrees C). Whisk together the beer, garlic, honey, Worcestershire sauce, and mustard in a bowl. Set aside. 
3. Tear off 2 large sheets of heavy duty aluminum foil and lay them shiny-side down. Place a rack of spareribs on each sheet, meaty-side up. Tear off 2 more sheets of foil and place them on top of the ribs, shiny-side up. Begin tightly folding the edges of the foil together to create a sealed packet. Just before sealing completely, divide the beer mixture evenly into each packet. Complete the seal. Place the packets side-by-side on an 11x14-inch baking sheet.
4. Bake in the preheated oven until the ribs are very tender, 3 hours and 30 minutes to 4 hours. Carefully open each packet, and drain the drippings into a saucepan. You may only need the drippings from one packet. Set ribs aside. Simmer the drippings over medium-high heat until the sauce begins to thicken, about 5 minutes. Brush the thickened sauce over the ribs.
5. Preheat the oven's broiler and set the oven rack about 6 inches from the heat source.
6. Place the ribs back into the oven and broil until the sauce is lightly caramelized, 5 to 7 minutes. 
HTML
);

        $recipe3 = new Recipe();
        $recipe3->setDate(new \DateTime());
        $recipe3->setAuthor($this->getReference('melissa'));
        $recipe3->setDescription("Preparation time: 20 minutes - cook time: 15 minutes - ready in: 35 minutes - difficulty level: easy");
        $recipe3->setTitle('Caesar salad');
        $recipe3->setImage('assets/img/article/recipe3.jpg');
        $recipe3->setContent(<<<HTML
Ingredients:
6 cloves garlic
3/4 cup mayonnaise
5 anchovy fillets
6 tablespoons grated Parmesan cheese, divided
1 teaspoon Worcestershire sauce
1 teaspoon Dijon mustard
1 tablespoon lemon juice, or more to taste
salt to taste
ground black pepper to taste
1/4 cup olive oil
4 cups day-old bread, cubed
1 head romaine lettuce, torn into bite-size pieces

Instructions:
1. Mince 3 cloves of garlic, and combine in a small bowl with mayonnaise, anchovies, 2 tablespoons of the Parmesan cheese, Worcestershire sauce, mustard, and lemon juice. Season to taste with salt and black pepper. Refrigerate until ready to use.
2. Heat oil in a large skillet over medium heat. Cut the remaining 3 cloves of garlic into quarters, and add to hot oil. Cook and stir until brown, and then remove garlic from pan. Add bread cubes to the hot oil. Cook, turning frequently, until lightly browned. Remove bread cubes from oil, and season with salt and pepper.
3. Place lettuce in a large bowl. Toss with dressing, remaining Parmesan cheese, and seasoned bread cubes.
HTML
);

        $manager->persist($recipe1);
        $manager->persist($recipe2);
        $manager->persist($recipe3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            OwnerFixtures::class,
        );
    }

    public function getOrder()
    {
        return 3;
    }
}