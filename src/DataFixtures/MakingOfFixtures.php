<?php

namespace App\DataFixtures;


use App\Entity\MakingOf;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MakingOfFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $of = new MakingOf();
        $of->setTitre("Demolition man");
        $of->setImageArticle("Affiche-Demolition-Man.jpeg");
        $of->setImageName("demolition-man.png");
        $of->setUpdatedAt(new DateTimeImmutable());
        $of->setDescription("Nouvelle émission de damiencinematicuniverse .Avec Making-of, vous allez connaître les secrets de tournage, anecdotes, genèse, rush et coulisses des plus grands films et des meilleures séries de la Pop Culture !!");
        $of->setDetail("On ouvre les festivités avec un film d’action S.F. made in 90’s, Demolition Man de Marco Brambilla. Vous allez tout savoir ! Comment Sylvester Stallone, Wesley Snipes et Sandra Bullock ont atterri dans ce film, qui a eu l’idée de l’histoire, que vient faire Marvel ici ? Et beaucoup d’autres surprises !

        Installez-vous tranquillement et profitez de cet instant 100% cinéphile !
        
        Enjoy !");
        $of->setVideo("https://www.youtube.com/embed/pz-avfC-YXM");
        $manager->persist($of);

        $manager->flush();
    }
}
