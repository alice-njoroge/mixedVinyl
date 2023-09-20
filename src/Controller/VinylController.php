<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homePage(): Response
    {
        $tracks = [
            ['song' => 'touch the sky', 'artist' => 'hillSong'],
            ['song' => 'living hope', 'artist' => 'Phil'],
            ['song' => 'intentional', 'artist' => 'Travis Green']
        ];
        return $this->render('vinyl/homePage.html.twig', [
            "title" => "PB & Jams",
            "tracks"=> $tracks
        ]);

    }



}