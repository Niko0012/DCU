<?php

namespace App\Controller;

use App\Entity\MakingOf;
use App\Form\MakingOfType;
use App\Repository\MakingOfRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/making/of")
 */
class AdminMakingOfController extends AbstractController
{
    /**
     * @Route("/", name="admin_making_of_index", methods={"GET"})
     */
    public function index(MakingOfRepository $makingOfRepository): Response
    {
        return $this->render('admin_making_of/index.html.twig', [
            'making_ofs' => $makingOfRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_making_of_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $makingOf = new MakingOf();
        $form = $this->createForm(MakingOfType::class, $makingOf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($makingOf);
            $entityManager->flush();

            return $this->redirectToRoute('admin_making_of_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_making_of/new.html.twig', [
            'making_of' => $makingOf,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_making_of_show", methods={"GET"})
     */
    public function show(MakingOf $makingOf): Response
    {
        return $this->render('admin_making_of/show.html.twig', [
            'making_of' => $makingOf,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_making_of_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, MakingOf $makingOf, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MakingOfType::class, $makingOf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_making_of_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_making_of/edit.html.twig', [
            'making_of' => $makingOf,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_making_of_delete", methods={"POST"})
     */
    public function delete(Request $request, MakingOf $makingOf, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$makingOf->getId(), $request->request->get('_token'))) {
            $entityManager->remove($makingOf);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_making_of_index', [], Response::HTTP_SEE_OTHER);
    }
}
