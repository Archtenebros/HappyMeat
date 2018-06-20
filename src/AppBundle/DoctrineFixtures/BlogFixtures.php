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
        $blog1->setTitle("Forgotten but amazing pic breeds");
        $blog1->setAuthor($this->getReference("melissa"));
        $blog1->setDate(new \DateTime());
        $blog1->setContent(<<<HTML
How Peter got into rearing Ark of Taste pig breeds and why he chose these particular breeds:
Peter is a self-proclaimed ‘man on a mission’. Farming is his business and his passion, and while he works very heard to make his business a success he is also intent on promoting a system of farming to the public that focuses high welfare animals where quality is the most important factor, not quantity. Peter was born to a family of retailers, food manufacturers and farmers and so has had a view of the ‘food system’ in it’s entirety. From the age of 17 he took over the family market stalls and gradually grew the business selling bacon, sausages and other farm related products. Peter, along with  his wife Christine and daughter Julie, has been running the farm for over 20 years now, rearing wild boar, rare breed pigs and poultry, all of which are free range. For Peter rare breed pigs are the best to eat with perfect, flavoursome fat, and beautiful, tender meat, and he is keen to not only promote their wonderful flavour but also their qualities as individual breeds. Peter is a busy man splitting his time between the farm, driving his produce down to London and selling it, as well as promoting quality food and food production to the media and the public. In his own words he is proud to continue the ‘farm to fork’ tradition his family have always stuck to and would love nothing more than to see high welfare, lovingly produced meat back on Britain’s plates.
Products that Peter is offering:
Peter offers a range of Ark of Taste rare breed pig products from sausages to bacon as well as various cuts and chops. For more information visit the website or contact the farm.
HTML
        );

        $blog2 = new Blog();
        $blog2->setTitle("5 reasons for organic farming");
        $blog2->setAuthor($this->getReference("cleo"));
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

        $blog4 = new Blog();
        $blog4->setTitle("What are the environmental benefits of organic agriculture?");
        $blog4->setAuthor($this->getReference("yves"));
        $blog4->setDate(new \DateTime());
        $blog4->setContent(<<<HTML
Sustainability over the long term. Many changes observed in the environment are long term, occurring slowly over time. Organic agriculture considers the medium- and long-term effect of agricultural interventions on the agro-ecosystem. It aims to produce food while establishing an ecological balance to prevent soil fertility or pest problems. Organic agriculture takes a proactive approach as opposed to treating problems after they emerge.
Soil. Soil building practices such as crop rotations, inter-cropping, symbiotic associations, cover crops, organic fertilizers and minimum tillage are central to organic practices. These encourage soil fauna and flora, improving soil formation and structure and creating more stable systems. In turn, nutrient and energy cycling is increased and the retentive abilities of the soil for nutrients and water are enhanced, compensating for the non-use of mineral fertilizers. Such management techniques also play an important role in soil erosion control. The length of time that the soil is exposed to erosive forces is decreased, soil biodiversity is increased, and nutrient losses are reduced, helping to maintain and enhance soil productivity. Crop export of nutrients is usually compensated by farm-derived renewable resources but it is sometimes necessary to supplement organic soils with potassium, phosphate, calcium, magnesium and trace elements from external sources.
Water. In many agriculture areas, pollution of groundwater courses with synthetic fertilizers and pesticides is a major problem. As the use of these is prohibited in organic agriculture, they are replaced by organic fertilizers (e.g. compost, animal manure, green manure) and through the use of greater biodiversity (in terms of species cultivated and permanent vegetation), enhancing soil structure and water infiltration. Well managed organic systems with better nutrient retentive abilities, greatly reduce the risk of groundwater pollution. In some areas where pollution is a real problem, conversion to organic agriculture is highly encouraged as a restorative measure (e.g. by the Governments of France and Germany).
Air and climate change. Organic agriculture reduces non-renewable energy use by decreasing agrochemical needs (these require high quantities of fossil fuel to be produced). Organic agriculture contributes to mitigating the greenhouse effect and global warming through its ability to sequester carbon in the soil. Many management practices used by organic agriculture (e.g. minimum tillage, returning crop residues to the soil, the use of cover crops and rotations, and the greater integration of nitrogen-fixing legumes), increase the return of carbon to the soil, raising productivity and favouring carbon storage. A number of studies revealed that soil organic carbon contents under organic farming are considerably higher. The more organic carbon is retained in the soil, the more the mitigation potential of agriculture against climate change is higher.  However, there is much research needed in this field, yet. There is a lack of data on soil organic carbon for developing countries, with no farm system comparison data from Africa and Latin America, and only limited data on soil organic carbon stocks, which is crucial for determining carbon sequestration rates for farming practices.
HTML
        );

        $manager->persist($blog);
        $manager->persist($blog1);
        $manager->persist($blog2);
        $manager->persist($blog3);
        $manager->persist($blog4);

        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }

}