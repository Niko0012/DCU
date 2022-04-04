<?php

namespace App\Controller;

use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        // On récupère le user actif dans une variable $user, le user de l'application se récupère directement
        // avec la méthode getUser()
        $user = $this->getUser();
        //On crée un formulaire dédié à ce que changer l'utilisateur
        $form = $this->createForm(UserType::class, $user);
        // On hydrate (mettre des données dedans) le formulaire avec les données POST se trouvant potentiellement dans la requête
        $form->handleRequest($request);
        //Si il y a eu hydratation alors on vérifie si le formulaire est soumis et valide
        //Alors on en traite les données et on flush (on met à jour la BDD)
        if($form->isSubmitted() && $form->isValid()){
            //On met à jour le mot de passe encodé de l'utilisateur s'il en a saisi un nouveau
            $plainPassword = $form->get('plainPassword')->getData();
            if(!is_null($plainPassword)){
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $plainPassword
                    )
                );
            }
            $entityManager->persist($user);
            $entityManager->flush();
            //On ajoute un message de confirmation géré en session automatiquement par Symfony
            $this->addFlash("success", "Vos information on bien été mises à jour.");
            //On redirige vers la même page
            $this->redirectToRoute('profile');
        }
        //Rendu
        return $this->render('user/index.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}
