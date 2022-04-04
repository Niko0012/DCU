<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ProchainesSortiesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProchaineSortieController extends AbstractController
{
    /**
     * @Route("/prochaines-sorties", name="prochaine_sortie")
     */
    public function index(ProchainesSortiesRepository $prochainesSortiesRepository): Response
    {
        $prochainesSorties = $prochainesSortiesRepository->findAll();
        return $this->render('prochaines_sorties/index.html.twig', [
            'prochainesSorties' => $prochainesSorties,
        ]);
    }

    /**
     * @Route("/prochaines-sorties/sortie/{id}", name="article_sortie")
     */
    public function article(int $id, ProchainesSortiesRepository $prochainesSortiesRepository, Request $request, EntityManagerInterface $entityManagerInterface): Response 
    {
        $sortie = $prochainesSortiesRepository->find($id);
        $commentaire = new Commentaire();
        $commentaire->setProchainesSorties($sortie);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManagerInterface->persist($commentaire);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('article_sortie', ['id'=>$id]);
        }
        return $this->render('prochaines_sorties/article_sortie.html.twig', [
        'sortie' => $sortie,
        'form' => $form->createView(),
    ]);
    }
}
