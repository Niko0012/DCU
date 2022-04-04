<?php

namespace App\DataFixtures;

use App\Entity\Podcast;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PodcastFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $pod = new Podcast();
        $pod->setTitre("Les Goonies");
        $pod->setImageArticle("Les-Goonies.png");  // taille de toutes les images 2042*876
        $pod->setImageName("Les Goonies.jpg"); // tailles de toutes images 1266*1066
        $pod->setUpdatedAt(new DateTimeImmutable());
        $pod->setDescription("Quand Spielberg produit le meilleur film d'aventure pour enfants");
        $pod->setDetail("Il est le film qui a fait rêver tous les enfants aventuriers de la planète et aujourd’hui encore il reste l’un des films cultes des années 80, « Les Goonies » ! Quand on regarde la fiche technique du film, on se dit de suite qu’il ne pouvait que cartonner : Steven Spielberg à la production, Chris Columbus au scénario et Richard Donner à la réalisation !!!! Aller, prenez votre carte aux trésors et suivez-nous dans l’aventure des anecdotes et secrets du film ! Goonies, never say die !! Enjoy !");
        $pod->setVideo("https://www.youtube.com/embed/q-FXQ0yPgpg");
        $manager->persist($pod);

        $pod = new Podcast();
        $pod->setTitre("F.R.I.E.N.D.S");
        $pod->setImageArticle("Friends1.jpg");
        $pod->setImageName("Friends.jpg");
        $pod->setUpdatedAt(new DateTimeImmutable());
        $pod->setDescription("L'histoire et la genèse de la série phénomène");
        $pod->setDetail("Quoi de mieux, pour débuter cette deuxième saison des Podcasts de DCU, que de parler d’amitié ? Ça tombe bien, « Friends » est LA série qui traite le mieux ce sujet. Alors rejoignez Rachel, Monica, Phoebe, Joey, Chandler et Ross et découvrez toutes les anecdotes et secrets de cette série incontournable ! I’ll be there for you !!!! Enjoy !");
        $pod->setVideo("https://www.youtube.com/embed/hIk06FrvYgU");
        $manager->persist($pod);

        $pod = new Podcast();
        $pod->setTitre("S.O.S Fantômes");
        $pod->setImageArticle("SOS-fantome.png");
        $pod->setImageName("SOS Fantomes.jpg");
        $pod->setUpdatedAt(new DateTimeImmutable());
        $pod->setDescription("La Saga S.O.S Fantômes");
        $pod->setDetail("Alors que « S.O.S Fantômes : L’héritage » s’apprête à envahir les écrans de cinémas français dès le 1er décembre, la nouvelle saison de « D.C.U : Le Podcast » vous emmène à la découverte de cette saga culte ! Vous allez connaître les secrets et anecdotes qui ont permis de créer l’histoire de ces chasseurs de fantômes complètement barrés ! Dans cet épisode on va vous parler des deux premiers films originaux de la saga, mais aussi du reboot de 2016, ainsi que du prochain opus ! Enjoy !
        Who you gonna call ?");
        $pod->setVideo("https://www.youtube.com/embed/CI8lr9Ch5PM");
        $manager->persist($pod);

        $pod = new Podcast();
        $pod->setTitre("Batman");
        $pod->setImageArticle("Batman1.jpg");
        $pod->setImageName("Batman.jpg");
        $pod->setUpdatedAt(new DateTimeImmutable());
        $pod->setDescription("Tout savoir sur les films de Tim Burton et Joel Schumacher");
        $pod->setDetail("Pour ce deuxième épisode de la saison deux des Podcasts de DCU, nous allons tout vous raconter sur les deux premiers films de l’homme chauve-souris de Tim Burton, Batman et Batman : Le Défi !! Mais pas que, nous allons aussi parler de ses deux suites, Batman Forever et Batman");
        $pod->setVideo("https://www.youtube.com/embed/L6YX736iOYU");
        $manager->persist($pod);

        $pod = new Podcast();
        $pod->setTitre("Retour vers le future");
        $pod->setImageArticle("Retour-vers-le-futur.png");
        $pod->setImageName("Retour vers le futur.jpg");
        $pod->setUpdatedAt(new DateTimeImmutable());
        $pod->setDescription("La trilogie culte de Zemeckis, Bob Gale et Spielberg");
        $pod->setDetail("Nom de Zeus, un épisode spécial sur la trilogie qui a bercé les années 80 et 90 pour démarrer cette année 2020 !! « Retour Vers Le Futur », une production Steven Spielberg, une réalisation par le grand Robert Zemeckis, le tout porté par le duo à jamais indissociable Michael J. Fox et Christopher Lloyd ! Bref une trilogie qui est rentrée dans le panthéon de la Pop Culture ! Pourquoi Michael J.Fox n’a pas débuté le film dans le rôle de Marty, comment est née l’idée du film ? Vous l’avez compris, nous allons répondre à toutes ces questions et bien plus encore !! Enjoy !");
        $pod->setVideo("https://www.youtube.com/embed/644r5fl371M");
        $manager->persist($pod);

        $pod = new Podcast();
        $pod->setTitre("E.T");
        $pod->setImageArticle("E-T.png");
        $pod->setImageName("E T.jpg");
        $pod->setUpdatedAt(new DateTimeImmutable());
        $pod->setDescription("Le film qui a inventé le Blockbuster");
        $pod->setDetail("Tout ce que vous avez toujours voulu savoir sur E.T. L’Extra-Terrestre, le chef-d’oeuvre de Steven Spielberg !! De la création du film en passant par des secrets de tournage, l’histoire des acteurs, le parallèle avec l’enfance de Steven Spielberg, son succès inattendu, son inspiration pour de nombreux réalisateurs d’aujourd’hui ! Bref, vous saurez tout sur ce film qui a changé l’industrie du cinéma Américain !!! Enjoy !!!");
        $pod->setVideo("https://www.youtube.com/embed/yIiCrwr3Yac");
        $manager->persist($pod);

        $pod = new Podcast();
        $pod->setTitre("Maman, j'ai raté l'avion! 1&2");
        $pod->setImageArticle("Maman-j-ai-raté-lavion.png");
        $pod->setImageName("Maman j ai rate l avion.jpg");
        $pod->setUpdatedAt(new DateTimeImmutable());
        $pod->setDescription("Tout savoir sur les 2 films cultes de Noël");
        $pod->setDetail("C’est la période de Noël, alors sortons les sapins, les guirlandes et oublions Kevin à la maison !! Pour cet épisode spécial fêtes de fin d’année, nous parlons de « Maman, J’ai Raté l’Avion » 1 et 2 ! Comment le scénariste a eu l’idée du film, comment Culkin a décroché le rôle ou qui devait jouer le rôle Harry le chef des Casseurs Flotteurs ! Toutes ces questions et plus encore qui vont avoir réponse dans ce nouvel épisode ! Enjoy !");
        $pod->setVideo("https://www.youtube.com/embed/7t7oRqwg7BQ");
        $manager->persist($pod);



        $manager->flush();
    }
}
