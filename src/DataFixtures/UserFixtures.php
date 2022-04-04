<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    // ====================================================== //
    // ===================== PROPRIETES ===================== //
    // ====================================================== //
    private $encoder;
    // ====================================================== //
    // ==================== CONSTRUCTEUR ==================== //
    // ====================================================== //
public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
{
    $this->encoder = $userPasswordHasherInterface;
}
    // ====================================================== //
    // ======================= METHODE ====================== //
    // ====================================================== //
    
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setPrenom("Nicolas");
        $user->setNom("Cussac");
        $user->setEmail("cussac.nicolas@wanadoo.fr");
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $passeword = $this->encoder->hashPassword($user, "pass");
        $user->setPassword($passeword);
        $user->setIsVerified(true);
        $manager->persist($user);
        // 
        $user = new User();
        $user->setPrenom("Jean");
        $user->setNom("Test");
        $user->setEmail("jean@test.com");
        $user->setRoles(['ROLE_USER']);
        $passeword = $this->encoder->hashPassword($user, "pass");
        $user->setPassword($passeword);
        $user->setIsVerified(true);
        $manager->persist($user);

        $manager->flush();
    }
}
