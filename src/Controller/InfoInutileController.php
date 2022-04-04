<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\InfoInutileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InfoInutileController extends AbstractController
{
    /**
     * @Route("/infos-inutiles", name="info_inutile")
     */
    public function index(InfoInutileRepository $infoInutileRepository): Response
    {
        $infosInutiles = $infoInutileRepository->findAll();
        return $this->render('infos_inutiles/index.html.twig', [
            'infoInutile' => $infosInutiles,
        ]);
    }

    /**
     * @Route("/infos-inutiles/info/{id}", name="article_info")
     */
    public function article(int $id, InfoInutileRepository $infoInutileRepository, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $info = $infoInutileRepository->find($id);
        $commentaire = new Commentaire();
        $commentaire->setInfoInutile($info);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManagerInterface->persist($commentaire);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('article_info', ['id'=>$id]);
        }
        return $this->render('infos_inutiles/article_info.html.twig', [
            'info' => $info,
            'form' => $form->createView(),
        ]);
    }
}
