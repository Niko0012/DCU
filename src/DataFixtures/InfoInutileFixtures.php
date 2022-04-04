<?php

namespace App\DataFixtures;

use App\Entity\InfoInutile;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InfoInutileFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Tenet.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription("Tenet, The Batman et une bonne nouvelle.");
        $info->setDetail("Le saviez-vous ? C’est lors du premier jour de tournage du film « Tenet », réalisé par Christopher Nolan, que l’acteur Robert Pattinson a appris qu’il avait décroché le rôle de Bruce Wayne dans le prochain film de Matt Reeves, The Batman.");
        $manager->persist($info);

        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Une ecrivaine1.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription(" Une écrivaine, une adaptation ciné et un caméo raté.");
        $info->setDetail("Le saviez-vous ? Pour l’adaptation au cinéma de son roman « Harry Potter à l’école des sorciers », l’écrivaine J.K. Rowling a suivi scrupuleusement tous les choix de la production. Jusqu’à être même pressentie pour faire un caméo dans le film en tant Lily Potter, la mère d’Harry. Mais ayant de gros doutes sur ses qualités d’actrice, l’écrivaine a préféré laisser sa place à la comédienne Geraldine Somer");
        $manager->persist($info);

        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Acteur-pilote.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription("Un acteur, un pilote et deux Jedi.");
        $info->setDetail("Le saviez-vous ? Le grand frère de l’acteur Ewan McGregor, Colin McGregor, est pilote d’avion dans la Royal Air Force. Son nom de code en tant que pilote : « Obi-Two ». So cute !");
        $manager->persist($info);

        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Sony-Marvel.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription("Sony, Marvel et la mauvaise décision.");
        $info->setDetail("Le saviez-vous ? En 1998, lorsque Sony acheta les droits cinéma de l’univers de Spiderman à Marvel, pour 7 millions de dollar, l’éditeur était au bord de la faillite. Pour essayer de renflouer ses caisses, Marvel proposa aussi à Sony d’acquérir l’exclusivité des droits cinéma de la quasi totalité des ses héros, comme Iron Man, Captain America ou Thor. Sony refusa, persuadé qu’à part Spiderman, aucun autre super-héros feraient venir le public en salles.");
        $manager->persist($info);

        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Bruce-willis.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription("John McClane, Harlem et un panneau.");
        $info->setDetail("Le saviez-vous ? Dans « Une journée en enfer » lors de la scène où John McClane se baladait dans le quartier de Harlem avec un panneau portant l’inscription « I hate niggers » (je hais les nègres), il n’y avait en fait rien d’écrit dessus. Pour éviter une émeute dans le quartier, Bruce Willis portait un simple panneau blanc et c’est seulement en post production que le texte a été rajouté.");
        $manager->persist($info);

        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Marlon.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription("Marlon Brando, Le Parrain et un Chat.");
        $info->setDetail("Le saviez-vous ? Au début du film « Le Parrain » de Coppola, la scène où quand Brandon caresse un chat n’était pas prévue dans le scénario. Au bout de quelques prises, Coppola n’arrivait pas à avoir ce qu’il voulait pour cette scène. C’est en voyant les chats errants autour du studio que le réalisateur eu l’idée de prendre l’un d’eux et de le mettre dans les bras de Brando. Il en est ressorti la scène que l’ont connait tous aujourd’hui…");
        $manager->persist($info);

        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Charlie-Sheen.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription("Charlie Sheen, Sam Raimi et Spiderman.");
        $info->setDetail("Le saviez-vous ? Au début des années 2000, Sam Raimi lançait le casting pour trouver son Peter Parker pour le film « Spiderman », qui devait sortir 2 ans plus tard. À la grande surprise générale, l’acteur Charlie Sheen se présenta aux auditions, âgé de 35 ans à l’époque il fut recalé assez rapidement.

        (Les illustrations des articles sont Copyright © de leurs ayants droits. Tous droits réservés.)");
        $manager->persist($info);

        $info = new InfoInutile();
        $info->setTitre("Info inutile");
        $info->setImageArticle("Georges-Aminel.jpg");
        $info->setImageName("info.jpg");
        $info->setUpdatedAt(new DateTimeImmutable());
        $info->setdescription("Georges Aminel, le doublage et la retraite.");
        $info->setDetail("Le saviez-vous ? En 2005, l’acteur Georges Aminel accepta de sortir de sa retraite qu’il avait prise depuis 17 ans, afin de doubler à nouveau le méchant le plus célèbre du cinéma. En effet, Monsieur Aminel n’est autre que la voix Française officielle de Dark Vador depuis « L’Empire contre-attaque ».

        (Les illustrations des articles sont Copyright © de leurs ayants droits. Tous droits réservés. Les Archives de la Gazette du Doublage)");
        $manager->persist($info);

        $manager->flush();
    }
}
