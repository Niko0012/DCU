<?php

namespace App\Controller;

use App\Entity\InfoInutile;
use App\Form\InfoInutileType;
use App\Repository\InfoInutileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/info/inutile")
 */
class AdminInfoInutileController extends AbstractController
{
    /**
     * @Route("/", name="admin_info_inutile_index", methods={"GET"})
     */
    public function index(InfoInutileRepository $infoInutileRepository): Response
    {
        return $this->render('admin_info_inutile/index.html.twig', [
            'info_inutiles' => $infoInutileRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_info_inutile_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $infoInutile = new InfoInutile();
        $form = $this->createForm(InfoInutileType::class, $infoInutile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($infoInutile);
            $entityManager->flush();

            return $this->redirectToRoute('admin_info_inutile_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_info_inutile/new.html.twig', [
            'info_inutile' => $infoInutile,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_info_inutile_show", methods={"GET"})
     */
    public function show(InfoInutile $infoInutile): Response
    {
        return $this->render('admin_info_inutile/show.html.twig', [
            'info_inutile' => $infoInutile,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_info_inutile_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, InfoInutile $infoInutile, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InfoInutileType::class, $infoInutile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_info_inutile_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_info_inutile/edit.html.twig', [
            'info_inutile' => $infoInutile,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="admin_info_inutile_delete", methods={"POST"})
     */
    public function delete(Request $request, InfoInutile $infoInutile, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$infoInutile->getId(), $request->request->get('_token'))) {
            $entityManager->remove($infoInutile);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_info_inutile_index', [], Response::HTTP_SEE_OTHER);
    }
}
