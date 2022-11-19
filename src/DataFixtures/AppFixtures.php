<?php

namespace App\DataFixtures;

use App\Entity\Locations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $pin1 = new Locations();
        $pin1->setName('Calanque');
        $pin1->setVideos('https://www.youtube.com/embed/plR6dsyBpJc');
        $pin1->setSummary("Calanque : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin1->setLinks('https://www.marseille-tourisme.com/decouvrez-marseille/calanques-plages-et-nature/les-calanques-de-marseille/');
        $pin1->setGoogleMap('https://goo.gl/maps/9fZz5xvDnNFVTpNP8');
        $pin1->setColour('green');
        $manager->persist($pin1);

        $pin2 = new Locations();
        $pin2->setName('Boulangerie Pâtisserie Artisanale');
        $pin2->setVideos('https://www.youtube.com/embed/M9d6VXb3jOw');
        $pin2->setSummary("Boulangerie Pâtisserie Artisanale : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin2->setLinks('https://fr.wikipedia.org/wiki/Croissant_(viennoiserie)');
        $pin2->setGoogleMap('https://goo.gl/maps/QkpiL8eBLDwcGAny9');
        $pin2->setColour('yellow');
        $manager->persist($pin2);

        $pin3 = new Locations();
        $pin3->setName('Pétanque Carryenne');
        $pin3->setVideos('https://www.youtube.com/embed/0pWYkbqJ3w4');
        $pin3->setSummary("Pétanque Carryenne : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin3->setLinks('https://www.otcarrylerouet.fr/fr/decouvertes-et-art-de-vivre/petanque');
        $pin3->setGoogleMap('https://goo.gl/maps/u2FRrRc2i6T8TFwG8');
        $pin3->setColour('blue');
        $manager->persist($pin3);

        $pin4 = new Locations();
        $pin4->setName('Château Crémade');
        $pin4->setVideos('https://www.youtube.com/embed/rR1QxNIbkpQ');
        $pin4->setSummary("Château Crémade : There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");
        $pin4->setLinks('https://www.chateaucremade.fr/');
        $pin4->setGoogleMap('https://goo.gl/maps/FeLhsK3ZgYLkMZsx5');
        $pin4->setColour('pink');
        $manager->persist($pin4);


        $manager->flush();
    }
}
