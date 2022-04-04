<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\MakingOfRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MakingOfController extends AbstractController
{
    /**
     * @Route("/making-of", name="making_of")
     */
    public function index(MakingOfRepository $makingOfRepository ): Response
    {
        $makingOf = $makingOfRepository->findAll();
        return $this->render('making_of/index.html.twig', [
            'making_of' => $makingOf,
        ]);
    }


    /**
     * @Route("/making-of/of/{id}", name="article_of")
     */
    public function article(int $id, MakingOfRepository $makingOfRepository, Request $request, EntityManagerInterface $entityManagerInterface) : Response
    {
        $of = $makingOfRepository->find($id);
        $commentaire = new Commentaire();
        $commentaire->setMakingOf($of);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManagerInterface->persist($commentaire);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('article_of', ['id'=>$id]);
        }
        return $this->render('making_of/article_of.html.twig', [
            'of' => $of,
            'form' => $form->createView(),
        ]);
    }
}
