<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\InfoInutileRepository;
use App\Repository\MakingOfRepository;
use App\Repository\ProchainesSortiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     * @Route("/home", name="home")
     */
    public function index(CarouselRepository $carouselRepository, ProchainesSortiesRepository $prochainesSortiesRepository, MakingOfRepository  $makingOfRepository, InfoInutileRepository $infoInutileRepository): Response
    {
        $prochainesSorties = $prochainesSortiesRepository->findBy([], [
            "id" => "DESC"
        ],3);
        // $makingOf  = $makingOfRepository->findOneBy([], [
        //     "id" => "DESC"
        // ]);
        $infoInutile = $infoInutileRepository->findBy([], [
            "id" => "DESC"
        ],3);
        return $this->render('home/index.html.twig', [
            'carousels' => $carouselRepository->findAll(),
            'prochainesSorties' => $prochainesSorties,
            // 'makingOf' => $makingOf,
            'infoInutile' => $infoInutile,
        ]);
    }
}
