<?php

namespace App\Controller;

use App\Entity\ProchainesSorties;
use App\Form\ProchainesSortiesType;
use App\Repository\ProchainesSortiesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/prochaines/sorties")
 */
class AdminProchainesSortiesController extends AbstractController
{
    /**
     * @Route("/", name="admin_prochaines_sorties_index", methods={"GET"})
     */
    public function index(ProchainesSortiesRepository $prochainesSortiesRepository): Response
    {
        return $this->render('admin_prochaines_sorties/index.html.twig', [
            'prochaines_sorties' => $prochainesSortiesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_prochaines_sorties_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $prochainesSorty = new ProchainesSorties();
        $form = $this->createForm(ProchainesSortiesType::class, $prochainesSorty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($prochainesSorty);
            $entityManager->flush();

            return $this->redirectToRoute('admin_prochaines_sorties_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_prochaines_sorties/new.html.twig', [
            'prochaines_sorty' => $prochainesSorty,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_prochaines_sorties_show", methods={"GET"})
     */
    public function show(ProchainesSorties $prochainesSorty): Response
    {
        return $this->render('admin_prochaines_sorties/show.html.twig', [
            'prochaines_sorty' => $prochainesSorty,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_prochaines_sorties_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ProchainesSorties $prochainesSorty, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProchainesSortiesType::class, $prochainesSorty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_prochaines_sorties_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_prochaines_sorties/edit.html.twig', [
            'prochaines_sorty' => $prochainesSorty,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_prochaines_sorties_delete", methods={"POST"})
     */
    public function delete(Request $request, ProchainesSorties $prochainesSorty, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$prochainesSorty->getId(), $request->request->get('_token'))) {
            $entityManager->remove($prochainesSorty);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_prochaines_sorties_index', [], Response::HTTP_SEE_OTHER);
    }
}
