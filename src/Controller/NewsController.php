<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\NewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function index(NewsRepository $newsRepository): Response
    {
        $news = $newsRepository->findAll();
        return $this->render('news/index.html.twig', [
            'news' => $news,
        ]);
    }
    /**
     * @Route("/news/article_news/{id}", name="article_news")
     */
    public function article(int $id, NewsRepository $newsRepository, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $new = $newsRepository->find($id);
        $commentaire = new Commentaire();
        $commentaire->setNews($new);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManagerInterface->persist($commentaire);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('article_news', ['id'=>$id]);
        }
        return $this->render('news/article_news.html.twig', [
            'new' => $new,
            'form' => $form->createView(),
        ]);
    }
}
