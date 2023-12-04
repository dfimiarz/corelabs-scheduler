<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class HomeController{

    #[Route('/')]
    public function homepage(): Response{
        return new Response("Corelabs home page");
    }

    #[Route('/facilities/{slug}')]
    public function showFacility(string $slug = null): Response{
        if( $slug )
            $res = "Facility: " . u($slug);
        else    
            $res = "All facilities";

        return new Response($res);
    }

}