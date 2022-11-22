<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Locations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\BrowserKit\Response;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $category1 = new Category();
        $category1->setName('Instagrammable Spot');
        $category1->setImage('img/instagram_pin.svg');    
        $category1->setColour('green');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Food');
        $category2->setImage('img/food_pin.svg');    
        $category2->setColour('yellow');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Activities');
        $category3->setImage('img/activity_pin.svg');    
        $category3->setColour('blue');
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName('Wine');
        $category4->setImage('img/wine_pin.svg');    
        $category4->setColour('pink');
        $manager->persist($category4);

        $pin1 = new Locations();
        $pin1->setName('Calanque');
        $pin1->setVideos('https://www.youtube.com/embed/plR6dsyBpJc');
        $pin1->setSummary("Calanque : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin1->setLinks('https://www.marseille-tourisme.com/decouvrez-marseille/calanques-plages-et-nature/les-calanques-de-marseille/');
        $pin1->setGoogleMap('https://goo.gl/maps/9fZz5xvDnNFVTpNP8');
        $pin1->setCategory($category1);
        $manager->persist($pin1);

        $pin2 = new Locations();
        $pin2->setName('Boulangerie Pâtisserie Artisanale');
        $pin2->setVideos('https://www.youtube.com/embed/M9d6VXb3jOw');
        $pin2->setSummary("Boulangerie Pâtisserie Artisanale : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin2->setLinks('https://fr.wikipedia.org/wiki/Croissant_(viennoiserie)');
        $pin2->setGoogleMap('https://goo.gl/maps/QkpiL8eBLDwcGAny9');
        $pin2->setCategory($category2);
        $manager->persist($pin2);

        $pin3 = new Locations();
        $pin3->setName('Pétanque Carryenne');
        $pin3->setVideos('https://www.youtube.com/embed/0pWYkbqJ3w4');
        $pin3->setSummary("Pétanque Carryenne : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin3->setLinks('https://www.otcarrylerouet.fr/fr/decouvertes-et-art-de-vivre/petanque');
        $pin3->setGoogleMap('https://goo.gl/maps/u2FRrRc2i6T8TFwG8');
        $pin3->setCategory($category3);
        $manager->persist($pin3);

        $pin4 = new Locations();
        $pin4->setName('Château Crémade');
        $pin4->setVideos('https://www.youtube.com/embed/rR1QxNIbkpQ');
        $pin4->setSummary("Château Crémade : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin4->setLinks('https://www.chateaucremade.fr/');
        $pin4->setGoogleMap('https://goo.gl/maps/FeLhsK3ZgYLkMZsx5');
        $pin4->setCategory($category4);
        $manager->persist($pin4);

        $manager->flush();

    }
}
