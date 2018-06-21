<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 20/06/2018
 * Time: 18:23
 */

namespace AppBundle\DoctrineFixtures;


use AppBundle\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class BlogFixtures extends Fixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $blog = new Blog();
        $blog->setImage("assets/img/new1.jpg");
        $blog->setTitle("Slow your food down");
        $blog->setAuthor($this->getReference("melissa"));
        $blog->setDate(new \DateTime());
        $blog->setContent(<<<HTML
The great technological changes in the kitchen over the last couple of hundred years have been in the realm of what might be called hardware — infrastructure and equipment. But the most potential for making cooking easier, more healthful and even more planet-friendly lies in software, which has the power to change the way we shop for food, the way it gets delivered to us and ultimately the way it gets produced. Using computers, including hand-helds and smartphones, we can make our preferences better known to the people who bring us the food we buy and eat: farmers, processors, distributors and retailers. We can demand and eventually get precisely the kind of food we want.
After all, nearly all of us already have the two most important pieces of hardware for cooking: a stove and a refrigerator. (The dishwasher is a close third, but it is neither universal nor essential.) We take these technologies for granted, as we do the electricity and gas systems that power them — not to mention the hot water delivered to the sink, something that was an uncommon luxury as recently as a hundred years ago and still one to billions of the world’s citizens. Without these things, cooking at home is a full-time job. By the time you fetch water and build a fire to heat it you have burned more calories than most office workers do in a day, and you have not yet had coffee.
In the 20th century, the rise of packaged foods brought drastic changes to the way many of us eat, and not for the better. A huge percentage of our food is now awful-tasting, nutritionally bankrupt and environmentally damaging.
Yet our cooking equipment hasn’t changed much in the past 60 years, nor is it likely to. The tasks confronting those who prepare meals from scratch have been pretty much the same since the time of our grandparents. Induction ranges are nice, but even if they became common (unlikely, because they often require buying new cookware), the difference they’d make in convenience and heat control is no more important than the difference between gas and electricity, which itself is overstated. Convection ovens are wonderful, and $20,000 range-oven-broiler combinations even more so, but so what? More expensive appliances don’t promote cooking any more than exorbitant gym memberships promote fitness.
HTML
);
        $blog1 = new Blog();
        $blog1->setImage("assets/img/new2.jpg");
        $blog1->setTitle("What are the environmental benefits of organic agriculture ?");
        $blog1->setAuthor($this->getReference("arthur"));
        $blog1->setDate(new \DateTime());
        $blog1->setContent(<<<HTML
The UK’s organic pig herd nearly doubled in 2017, new figures from Defra show.
The number of pigs farmed organically in the UK increased from 31,000 to almost 59,000, the largest proportional increase across all sectors, albeit from a very low base
This included just over 5,000 breeding sows and 37,0000 fattening pigs. More than 90% of organic pigs were farmed in England. The total number of organic pigs recorded at the end of June 2017, 4,969, represented 1.2% of the UK pig herd at the time.
The figures showed the first increase in organic farming across the agricultural sector in six years, with the number of producers farming organically rising by almost 2% in 2017. The uplift takes the amount of organic land in the UK to 517,000ha, also up nearly 2% on the previous year.
There are now 6600 organic operators in the UK. Of those, livestock and mixed producers dominate, with 64% of UK organic land classified as grassland.
Organic sheep production increased by 5.5% to 887,000 animals, while organic poultry numbers increased by 8.5% to just over 3m. In the arable sector, 7% of UK organic land is used to grow cereals, with 37,400 ha in organic cereal production.
Organic certifier OF&G, which certifies more than half of the UK’s organic land, said the increase across agriculture showed that farmers were listening to consumer demand and acting on market interest.
“What’s more, more shoppers than ever are looking to buy organic food, and with the report showing a 29.4% increase in UK land currently under organic conversion, it suggests more land will become fully organic in the coming years, which is hugely positive for the sector,” said Roger Kerr, OF&G chief executive.
HTML
        );

        $blog2 = new Blog();
        $blog2->setImage("assets/img/new5.jpg");
        $blog2->setTitle("The storecupboard organic essentials you need");
        $blog2->setAuthor($this->getReference("jimmy"));
        $blog2->setDate(new \DateTime());
        $blog2->setContent(<<<HTML
Organic produce has become increasingly popular in recent years because people are discovering the numerous benefits it offers.  This figure is likely to keep growing, but why are people moving towards organic? Here are some of the key advantages of organic farming.
1) Healthier animals and healthier meat
The livestock on organic farms is free to roam and the animals only consume grass and certified organic feed. We don’t believe animals should live in cramped conditions or eat poor quality food. Increased exercise and a better diet ultimately lead to a healthier animal and therefore healthier meat.
2) No additives
Non-organic produce commonly contains food additives including preservatives, flavourings and colourings to make them look more attractive on the shelves. Although these chemicals keep food fresher for longer, the long-term effects of regularly consuming them are unknown. We don’t include additives or preservatives in our produce, so you don’t need to worry about negative effects on your health.
3) No GMOs
Genetically modified organisms (GMOs) are often used by farmers to increase yields and combat problems like diseases, pests and adverse weather conditions. GMOs are a cause for concern because of unknown health effects and possibilities for contamination. You can rest assured that GMOs are strictly banned from our methods at Graig Farm.
4) No chemical pesticides
Chemical pesticides are used to kill insects and bacteria that feed on produce. Pesticides can leave a toxic residue on the food itself, which is then transferred into our bodies. They’re dangerous to humans and other insects like bees. Organic farms only use natural methods of pest control, ensuring harmful chemicals aren’t entering your body. Read more about pesticides and meat.
5) Better for the environment
Non-organic farmers use chemicals that contimate water sources, surrounding habitats and the soil. The machinery used also releases lots of CO2 into the environment. At Graig Farm, we use sustainable methods to protect animals, promote biodiversity, maintain soil fertility and reduce CO2 emissions. We’re committed to minimising waste, pollution and the amount of energy used in producing and delivering our food. See more information about organic meat and the environment.
Organic farming is much better than the non-organic alternatives, so make the change and go organic with Graig Farm today. See our range of award-winning organic produce and get it delivered straight to your door.
HTML
        );

        $blog3 = new Blog();
        $blog3->setImage("assets/img/new4.jpg");
        $blog3->setTitle("UK organic pig numbers almost doubled in 2017");
        $blog3->setAuthor($this->getReference("cleo"));
        $blog3->setDate(new \DateTime());
        $blog3->setContent(<<<HTML
The UK’s organic pig herd nearly doubled in 2017, new figures from Defra show.
The number of pigs farmed organically in the UK increased from 31,000 to almost 59,000, the largest proportional increase across all sectors, albeit from a very low base
This included just over 5,000 breeding sows and 37,0000 fattening pigs. More than 90% of organic pigs were farmed in England. The total number of organic pigs recorded at the end of June 2017, 4,969, represented 1.2% of the UK pig herd at the time.
The figures showed the first increase in organic farming across the agricultural sector in six years, with the number of producers farming organically rising by almost 2% in 2017. The uplift takes the amount of organic land in the UK to 517,000ha, also up nearly 2% on the previous year.
There are now 6600 organic operators in the UK. Of those, livestock and mixed producers dominate, with 64% of UK organic land classified as grassland.
Organic sheep production increased by 5.5% to 887,000 animals, while organic poultry numbers increased by 8.5% to just over 3m. In the arable sector, 7% of UK organic land is used to grow cereals, with 37,400 ha in organic cereal production.
Organic certifier OF&G, which certifies more than half of the UK’s organic land, said the increase across agriculture showed that farmers were listening to consumer demand and acting on market interest.
“What’s more, more shoppers than ever are looking to buy organic food, and with the report showing a 29.4% increase in UK land currently under organic conversion, it suggests more land will become fully organic in the coming years, which is hugely positive for the sector,” said Roger Kerr, OF&G chief executive.
HTML
        );


        $manager->persist($blog);
        $manager->persist($blog1);
        $manager->persist($blog2);
        $manager->persist($blog3);

        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }

}