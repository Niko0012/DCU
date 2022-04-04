<?php

namespace App\DataFixtures;

use App\Entity\Carousel;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CarouselFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $carousel = new Carousel();
        $carousel->setImageName("355_2.jpg");
        $carousel->setUpdatedAt(new DateTimeImmutable());
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName("Uncharted_2.jpg");
        $carousel->setUpdatedAt(new DateTimeImmutable());
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName("mort_sur_le_nil2.png");
        $carousel->setUpdatedAt(new DateTimeImmutable());
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName("MOONKNIGHT.jpg");
        $carousel->setUpdatedAt(new DateTimeImmutable());
        $manager->persist($carousel);

        $manager->flush();
    }
}
