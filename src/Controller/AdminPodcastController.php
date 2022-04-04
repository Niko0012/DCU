<?php

namespace App\Controller;

use App\Entity\Podcast;
use App\Form\PodcastType;
use App\Repository\PodcastRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/podcast")
 */
class AdminPodcastController extends AbstractController
{
    /**
     * @Route("/", name="admin_podcast_index", methods={"GET"})
     */
    public function index(PodcastRepository $podcastRepository): Response
    {
        return $this->render('admin_podcast/index.html.twig', [
            'podcasts' => $podcastRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_podcast_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $podcast = new Podcast();
        $form = $this->createForm(PodcastType::class, $podcast);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($podcast);
            $entityManager->flush();

            return $this->redirectToRoute('admin_podcast_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_podcast/new.html.twig', [
            'podcast' => $podcast,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_podcast_show", methods={"GET"})
     */
    public function show(Podcast $podcast): Response
    {
        return $this->render('admin_podcast/show.html.twig', [
            'podcast' => $podcast,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_podcast_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Podcast $podcast, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PodcastType::class, $podcast);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_podcast_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_podcast/edit.html.twig', [
            'podcast' => $podcast,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_podcast_delete", methods={"POST"})
     */
    public function delete(Request $request, Podcast $podcast, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$podcast->getId(), $request->request->get('_token'))) {
            $entityManager->remove($podcast);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_podcast_index', [], Response::HTTP_SEE_OTHER);
    }
}
