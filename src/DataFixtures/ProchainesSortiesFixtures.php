<?php

namespace App\DataFixtures;

use App\Entity\ProchainesSorties;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProchainesSortiesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sortie = new ProchainesSorties();
        $sortie->setTitre("The 355");
        $sortie->setImageArticle("355_2.png");
        $sortie->setImageName("355.jpg");
        $sortie->setUpdatedAt(new DateTimeImmutable());
        $sortie->setDescription("Une équie de rêve composée de formidables stars féminines se réunit dans une approche originale et audacieuse du film d'espionnage globe-trotter. Cinq agnets rivaux. Une équipe d'élite. Elles sont The 355");
        $sortie->setDetail("L’histoire : Lorsqu’une arme top-secrète tombe entre les mains de mercenaires, l’agent Mason «Mace» Brown de la CIA (Jessica Chastain) devra s’associer à l’agent allemand dur à cuire Marie (Diane Kruger), à Khadijah (Lupita Nyong’o) informaticienne de pointe alliée du MI6 et à la psychologue colombienne Graciela (Penélope Cruz). Elles embarqueront dans une mission mortelle et vertigineuse afin d’essayer de récupérer cette arme, tout en gardant une longueur d’avance sur un femme mystérieuse, Lin Mi Sheng (BingBing Fan), qui suit chacun de leurs mouvements. Alors que l’action se propage dans le monde entier, des cafés de Paris aux marchés marocains en passant par Shanghai, le quatuor de femmes devra forger une loyauté à toutes épreuves afin de  protéger le monde.

        Le film met également en vedette Édgar Ramirez (La fille du train) et Sebastian Stan (Avengers: Endgame).
        
        The 355 est réalisé par Simon Kinberg (scénariste-réalisateur-producteur de Dark Phoenix, producteur de Deadpool et scénariste-producteur des films X-Men), et le scénario est co-écrit par Theresa Rebeck (Trouble) et Kinberg. Le film est co-produit par Jessica Chastain, Simon Kinberg et Richard Hewitt (Bohemian Rhapsody). The 355 a été tourné un peu partout dans le monde dont une grande partie à Paris.");
        $sortie->setVideo("https://www.youtube.com/embed/ka3Fe65TYkw");
        $manager->persist($sortie);

        $sortie = new ProchainesSorties();
        $sortie->setTitre("Scream 5");
        $sortie->setImageArticle("scream_5.jpg");
        $sortie->setImageName("Scream.jpg");
        $sortie->setUpdatedAt(new DateTimeImmutable());
        $sortie->setDescription("SCREAM (2022). Un retour réussi pour le Ghostface !");
        $sortie->setDetail("Scream 5 débarque au cinéma dès le 12 Janvier et vous allez mourir de plaisir de retrouver Sidney, Gale, Dewey et le GhostFace, pour une nouvelle balade meurtrière à Woodsboro !");
        $sortie->setVideo("https://www.youtube.com/embed/1QvVPKp3N00");
        $manager->persist($sortie);

        $sortie = new ProchainesSorties();
        $sortie->setTitre("UNCHARTED");
        $sortie->setImageArticle("uncharted.png");
        $sortie->setImageName("Uncharted1.jpg");
        $sortie->setUpdatedAt(new DateTimeImmutable());
        $sortie->setDescription("Le plus célèbre des jeux vidéo d'aventure, arrive sur grand écran");
        $sortie->setDetail("La saga « Uncharted » créée par Naughty Dog et Playstation débarque au cinéma avec Tom Holland dans le rôle titre, accompagné de Mark Wahlberg et Antonio Banderas. Le film sera en salles dès le 16 Février !");
        $sortie->setVideo("https://www.youtube.com/embed/mduvAjUGl4s");
        $manager->persist($sortie);

        $sortie = new ProchainesSorties();
        $sortie->setTitre("Matrix Ressurections");
        $sortie->setImageArticle("Matrix 4 source.png");
        $sortie->setImageName("matrix.jpg");
        $sortie->setUpdatedAt(new DateTimeImmutable());
        $sortie->setDescription("Un quatrième opus intéressant mais nécessaire");
        $sortie->setDetail("Le retour de Neo était attendu comme le messie et c’est chose faite avec « Matrix resurrections » qui est au cinéma depuis le 22 Décembre dernier. Ce quatrième volet à l’audace de proposer des choses innovantes et intéressantes, peut-être un peu trop même… Voici un nouvel épisode de « Et si l’on parlait de… » consacré au quatrième opus de cette saga mythique qu’est Martrix !");
        $sortie->setVideo("https://www.youtube.com/embed/hI-zQlDdQIs");
        $manager->persist($sortie);

        $sortie = new ProchainesSorties();
        $sortie->setTitre("S.O.S Fantomes");
        $sortie->setImageArticle("SOS fantome1.png");
        $sortie->setImageName("SOS Fantome.jpg");
        $sortie->setUpdatedAt(new DateTimeImmutable());
        $sortie->setDescription("La saga a enfin une suite qu'elle mérite!");
        $sortie->setDetail("Après plus de 30 ans d’attente, le réalisateur Jason Reitman (fils d’Ivan Reitman, réalisateur des 2 premiers SOS Fantômes) nous offre enfin une vraie et belle suite à la saga culte ! Respect et émotion, sont les maitres mots pour résumer cette suite !");
        $sortie->setVideo("https://www.youtube.com/embed/2J4Ti_WSARc");
        $manager->persist($sortie);

        $sortie = new ProchainesSorties();
        $sortie->setTitre("Résident Evil");
        $sortie->setImageArticle("Residente Evil_1.jpg");
        $sortie->setImageName("resident-evil-bienvenue-a-raccoon-city.jpg");
        $sortie->setUpdatedAt(new DateTimeImmutable());
        $sortie->setDescription("Cette nouvelle adaptation, situé en 1998, dévoile enfin les secrets du manoir Spencer et de la ville qui fut autrefois le siège florissant du géant pharmaceutique Umbrella Corporation. Ce nouveau départ se veut plus proche du jeu-vidéo que n’a pu l’être la précédente saga. Rendez-vous au cinéma 24 Novembre au cinéma pour en avoir le coeur net");
        $sortie->setDetail("L’histoire : Depuis le départ de la toute-puissante entreprise, Raccoon City a sombré jusqu’à la ruine, et une menace terrible se terre au plus profond de ses entrailles. Lorsque le mal se réveille en semant l’horreur, un petit groupe de survivants va unir ses forces pour tenter de découvrir la vérité sur Umbrella, en espérant voir le bout de la nuit…");
        $sortie->setVideo("https://www.youtube.com/embed/zE__yt-thQM");
        $manager->persist($sortie);

        $sortie = new ProchainesSorties();
        $sortie->setTitre("DUNE");
        $sortie->setImageArticle("dune-2021.jpg");
        $sortie->setImageName("Dune_2.jpg");
        $sortie->setUpdatedAt(new DateTimeImmutable());
        $sortie->setDescription(" DUNE, la sublime adaptation de Denis VILLENEUVE");
        $sortie->setDetail("Nouvel épisode qui vous parle du nouveau et magnifique film de Denis Villeneuve ! Mais aussi de la saga littéraire de Frank Herbert, ainsi que toutes les adaptations ciné et séries qui existent, dont celles avortées… Le film sera en exclusivité au cinéma dès le 15 Septembre !");
        $sortie->setVideo("https://www.youtube.com/embed/ECTsqkuRKFc");
        $manager->persist($sortie);


        $manager->flush();
    }
}
