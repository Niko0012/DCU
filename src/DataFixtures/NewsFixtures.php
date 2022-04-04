<?php

namespace App\DataFixtures;

use App\Entity\News;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NewsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $new = new News();
        $new->setTitre("Les anneaux");
        $new->setImageArticle("The rings of power.png");
        $new->setImageName("Le seigneur des anneaux.jpg");
        $new->setUpdatedAt(new DateTimeImmutable());
        $new->setDescription("Le titre complet de la série a été révélé aujourd’hui et le sens de celui-ci ne laissera probablement pas les fans de J.R.R. Tolkien de marbre, promettant une histoire épique contant les événements majeurs qui se sont déroulés lors du Second Âge : la forge des anneaux iconiques.");
        $new->setDetail("L’histoire : Le Seigneur des Anneaux : Les Anneaux de Pouvoir de Prime Video raconte pour la première fois à l’écran les légendes héroïques du Second Âge de l’histoire de la Terre du Milieu. Cette série épique prend place plusieurs milliers d’années avant les événements des livres J.R.R. Tolkien Le Hobbit et Le Seigneur des Anneaux, en transportant les spectateurs dans une ère où de grands pouvoirs ont été forgés, où des royaumes ont connu la gloire avant de tomber en ruines, où des héros improbables ont été testés, où l’espoir n’a souvent tenu qu’à un fil et où l’un des plus grands antagonistes jamais issus de la plume de Tolkien a menacé de recouvrir le monde de ténèbres. Débutant en temps de paix relative, la série suit de nombreux personnages, certains familiers, d’autres nouveaux, alors qu’ils se confrontent à la réémergence du mal en Terre du Milieu. Des profondeurs les plus sombres des Montagnes de Brume aux forets majestueuses de la capitale Elfique de Lindon, à l’île royaume à la beauté époustouflante de Númenor et jusqu’aux confins les plus éloignés du monde, ces royaumes et personnages bâtiront des légendes qui continueront d’exister bien longtemps après leur mort.

        Cette série dramatique qui s’étalera sur plusieurs saisons – Le Seigneur des Anneaux : Les Anneaux de Pouvoir – sera disponible exclusivement sur Prime Video dans plus de 240 pays à travers le monde dans de nombreuses langues, dès le vendredi 2 septembre, avec de nouveaux épisodes disponibles chaque semaine.
        
        « C’est un titre que nous imaginons pouvoir vivre sur la couverture d’un livre aux côtés des autres grands classiques de J.R.R. Tolkien Les Anneaux de Pouvoir rassemble tous les arcs narratifs principaux du Second Âge de la Terre du Milieu : la forge des anneaux, l’ascension de Sauron, seigneur des Ténèbres, le conte épique de Númenor et la Dernière Alliance des Elfes et des Hommes. » déclarent les showrunners J.D. Payne & Patrick McKay. “Jusqu’à maintenant, les fans n’ont pu voir à l’écran que les histoires de l’Anneau Unique, mais avant qu’il n’y en ait qu’un, ils étaient bien plus nombreux… et nous sommes ravis à l’idée de pouvoir partager leur histoire. »
        
        De la même façon que de nombreux éléments de la série ont été bâtis à la main, Prime Video a choisi de forger le titre dans une véritable fonderie, en versant du métal fondu sur des bûches de bois où les lettres ont été recrées à la main ; un processus capturé en slow-motion dans la vidéo disponible ci-dessus. Le titre apparaît alors dans un métal argenté, agrémenté de dialogues en langage elfique inscrits le long de chaque lettre.
        
        La série est dirigée par les showrunners et producteurs exécutifs J.D. Payne et Patrick McKay. Ils sont accompagnés des producteurs exécutifs Lindsey Weber, Callum Greene, J.A. Bayona, Belén Atienza, Justin Doble, Jason Cahill, Gennifer Hutchison, Bruce Richmond et Sharon Tal Yguado, et des producteurs Ron Ames et Christopher Newman. Wayne Che Yip est coproducteur exécutif, et réalise aux côtés de J.A. Bayona et Charlotte Brändström.
        
        Une œuvre littéraire mondialement reconnue et vainqueur des International Fantasy Award et Prometheus Hall of Fame Award, Le Seigneur des Anneaux a été élu le livre préféré du millénaire par les clients d’Amazon en 1999 et le livre le plus aimé de tous les temps en Grande-Bretagn par « The Big Read » de la BBC en 2003. Les livres Le Seigneur des Anneaux ont été traduits dans 38 langues et se sont vendus à plus de 150 millions d’exemplaires.");
        $new->setVideo("https://www.youtube.com/embed/e9NPBROVcBI");
        $manager->persist($new);

        $new = new News();
        $new->setTitre("Disney");
        $new->setImageArticle("PARALLELES-SCREENSHOT-UHD-2.png-2048x1152.png");
        $new->setImageName("Disney.jpg");
        $new->setUpdatedAt(new DateTimeImmutable());
        $new->setDescription("Après « Oussekine » et « Week-end family », Disney+ continue la production de contenus Made in France. Découvrez le casting et les premières images de « Parallèles », la première série fantastique française Disney+ original. Elle comportera 6 épisodes de 40min et arrivera bientôt chez nous, ainsi que dans le monde.");
        $new->setDetail("L’histoire : Quatre amis, Bilal, Romane, Samuel et Victor, vont voir leurs vies bouleversées lorsqu’un mystérieux événement va les séparer et les propulser dans des dimensions parallèles. Ils vont tout mettre en œuvre pour comprendre ce qui s’est passé et tenter de revenir en arrière, dans leur monde « d’avant ».

        Thomas Chomel (« Clem »), Omar Mebrouk (« HPI »), Jules Houplain (« Cassandre »), Jade Pedri (« Ils étaient dix »), Naidra Ayadi (« Polisse »), Guillaume Labbé (« Je te promets »), Gil Alma (« César Wagner »), Elise Diamant (« Mensonges »), Dimitri Storoge (« Les Lyonnais »), Agnès Miguras (« ASKIP ») Maxime Bergeron (« Les Fantasmes »), Victoria Eber (« Au-delà des apparences »), et Timoté Rigault (« Sam »), sont au casting de cette série française Disney+ Original.
        
        Produite par Empreinte Digitale (Raphaël Rocher et Eric Laroche) et Daïmôn Films (Quoc Dang Tran), cette série fantastique Disney+ Original pleine de suspense, de mystère et d’aventures est créée par Quoc Dang Tran (« Marianne », « Dix pour cent », « Nox »), co-écrite par Anastasia Heinzl (« Au-delà des apparences ») et réalisée par Benjamin Rocher et Jean-Baptiste Saurel.
        
        « La serie « Parallèles » sera une des premières productions françaises à être diffusée sur Disney+ en France et à l’international. Dans un genre assez peu représenté dans les séries françaises, le fantastique, cette série, qui allie suspense, humour et fantastique vient enrichir et diversifier les productions proposées sur Disney+”, déclare Pauline Dauvin, Vice-Présidente, Programmation, Production et Acquisition The Walt Disney Company France.
        
        Quoc Dang Tran, créateur et coproducteur de la série, ajoute : “Nous avions à coeur de raconter une histoire fantastique à hauteur d’adolescents, à l’âge où on quitte l’innocence et où les liens de l’amitié sont indéfectibles. Les effets spéciaux et le spectaculaire nous importaient moins que les émotions et l’intime – nous avons été parfaitement été entendus par les équipes Disney qui nous ont accompagnés tout au long du projet avec enthousiasme. »
        
        Raphaël Rocher et Eric Laroche, producteurs de la société Empreinte Digitale (« Marianne », « Missions », « Les Grands »), soulignent : « Nous sommes ravis de proposer une série d’un genre rarement présent sur les écrans et que nous affectionnons tout particulièrement, le fantastique. Le faire en étroite collaboration avec les équipes françaises et internationales de Disney+, un des acteurs mondiaux du divertissement, constitue pour nous une opportunité formidable ».");
        $new->setVideo("https://www.youtube.com/embed/KUVug77DXKQ");
        $manager->persist($new);

        $new = new News();
        $new->setTitre("Moon knight");
        $new->setImageArticle("MOONKNIGHT_FRP.jpg-scaled.jpg");
        $new->setImageName("Moon knight.jpg");
        $new->setUpdatedAt(new DateTimeImmutable());
        $new->setDescription("Marvel Studios fait passer un nouveau personnage du papier à l’écran ! Découvrez dès le 30 mars la nouvelle série Marvel sur Disney+:  Moon Knight, avec Oscar Isaac dans le rôle titre.");
        $new->setDetail("L’histoire : Steven Grant, employé discret dans une boutique de souvenirs, est soudain victime de pertes de mémoire et est hanté par des visions d’une autre vie. Il découvre qu’il souffre d’un trouble dissociatif de l’identité et qu’il partage le même corps qu’un mercenaire, Marc Spector. Alors que l’étau se resserre sur Steven / Marc, les deux hommes, plongés dans une aventure périlleuse parmi les puissants dieux d’Égypte, vont devoir trouver leur équilibre dans cette double identité.

        La série est réalisée par Mohamed Diab (« Amira »), réalisateur égyptien célèbre, et par le duo spécialisé dans le film fantastique (et adoubé par Guillermo Del Toro) Justin Benson et Aaron Moorhead (« Spring », « The Endless »). Pour le scénario, il est signé par Jeremy Slater à qui l’on doit la série « L’Exorciste ». Côté casting, « Moon Knight » est porté par Oscar Isaac (la dernière trilogie « Star Wars »), avec aussi Ethan Hawke (« The Northman ») et May Calamawy (« Ensemble ou pas »). Kevin Feige, Louis D’Esposito et Oscar Isaac, font partie des producteurs délégués.
        
        La nouvelle série Marvel « Moon Knight » arrive dès le 30 mars sur Disney+, bande annonce (VOST) :");
        $new->setVideo("https://www.youtube.com/embed/3V_Lklxmxa4");
        $manager->persist($new);

        $new = new News();
        $new->setTitre("Mort sur le nil");
        $new->setImageArticle("mort_sur_le_nil.png");
        $new->setImageName("Mort sur le nil.jpg");
        $new->setUpdatedAt(new DateTimeImmutable());
        $new->setDescription("MORT SUR LE NIL : Kenneth Branagh nous emmène dans une croisière pleine de rebondissements !");
        $new->setDetail("C’est mercredi que « Mort sur le Nil » arrive en salles ! Voici un nouvel épisode de « Et si l’on parlait de… » consacré au film réalisé par Kenneth Branagh, avec un casting haut de gamme : Gal Gadot, Tom Bateman, Emma Mackey, Annette Bening, Laetitia Wright et Ali Fazel . Enjoy !");
        $new->setVideo("https://www.youtube.com/embed/PfXUQkkvMQw");
        $manager->persist($new);

        $new = new News();
        $new->setTitre("Nothman");
        $new->setImageArticle("THE-NORTHMAN_TEASER_DATE_HD-scaled.jpg");
        $new->setImageName("Northman.jpg");
        $new->setUpdatedAt(new DateTimeImmutable());
        $new->setDescription("Le réalisateur de « The Lighthouse », Robert Eggers, revient avec un film épique sur les Vikings nordiques du Xème siècle. Sur fond de vengeance, « The northman » s’offre un casting puissant, pour une sortie le 18 mai au cinéma.");
        $new->setDetail("L’histoire : Quand un enfant, fils d’un roi viking, voit son père tuer sous les coups d’épée de son oncle, la fuite devient son seul espoir de survie. Il va alors grandir avec une unique idée en tête, retourner sur ses terres pour venger son père et reprendre le royaume à son oncle.Après ses deux premiers long-métrages très remarqués (« The witch », « The lighthouse »), le réalisateur et scénariste Robert Eggers revient avec un film à gros budget se passant au moyen-âge, au temps des Vikings nordique du Xème siècle. Pour écrire le scénario de son film, le réalisateur s’est fait aider par Sjón, célèbre parolier de Björk. Le film devait réunir à l’écran les frères Skarsgård, Alexander (qui a le rôle principal) et Bill (le clown dans « Ça »). Mais le covid a fait interrompre le tournage pendant plusieurs semaines, et dû à un problème d’emploi du temps, Bill n’a pas pu revenir sur le plateau et a été remplacé par l’acteur Gustav Lindh (« Orca »).Qui dit film à plus gros budget, dit aussi plus gros casting, et pour « The northman » Robert Eggers a eu une belle brochette ! Dans le rôle du vengeur nous avons Alexander Skarsgård (« Tarzan » 2016), il est entouré de Nicole Kidman (« The undoing »), Claes Bang (« The square »), Anya Taylor-Joy (« Le jeu de dame »), Willem Dafoe (« Spider-Man : No way home »), Ethan Hawke (« Moon Knight »), Björk (« Dancer in the dark ») et Gustav Lindh (« Orca »).Le film sortira le 18 Mai au cinéma, en attendant, voici sa bande-annonce (VOST) :");
        $new->setVideo("https://www.youtube.com/embed/oGmdCuUPwfI");
        $manager->persist($new);




        $manager->flush();
    }
}
