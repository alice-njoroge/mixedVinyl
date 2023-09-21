<?php

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{

    #[Route('api/song/{id<\d+>}', methods: ['GET'])]
    public function songAPI(int $id, LoggerInterface $logger): Response
    {
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        $logger->info("returning {song} from the logger", [
            'song'=> $id
        ]);
        return new JsonResponse($song);
    }

}