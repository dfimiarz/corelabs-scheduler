<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{

    #[Route('/')]
    public function homepage(): Response{
        return new Response("Corelabs home page");
    }

    #[Route('/facilities/{slug}')]
    public function showFacility(string $slug = null): Response{

        $facilities = [
            'LSM 800',
            'LSM 880',
            'NMR 300',
        ];

        return $this->render('homepage/facilities.html.twig',[
            'title' => "Facilities",
            'facilities' => $facilities
        ]);
    }

}