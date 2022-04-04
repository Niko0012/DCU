<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\PodcastRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PodcastController extends AbstractController
{
    /**
     * @Route("/podcasts", name="podcast")
     */
    public function index(PodcastRepository $podcastRepository): Response
    {
        $podcasts = $podcastRepository->findAll();
        return $this->render('podcasts/index.html.twig', [
            'podcasts' => $podcasts,
        ]);
    }

    /**
     * @Route("/podcasts/article_podcast/{id}", name="article_podcast")
     */
    public function article(int $id, PodcastRepository $podcastRepository, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $podcast = $podcastRepository->find($id);
        $commentaire = new Commentaire();
        $commentaire->setPodcast($podcast);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManagerInterface->persist($commentaire);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('article_podcast', ['id'=>$id]);
        }
        return $this->render('podcasts/article_podcast.html.twig', [
            'pod' => $podcast,
            'form' => $form->createView(),
        ]);
    }
}   
