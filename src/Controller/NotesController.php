<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NotesController extends AbstractController
{


    #[Route('/notes', name: 'app_notes')]
    public function index(): Response
    {
        $notes = [
            'Johan' => [12, 15, 18],
            'Nolie' => [20, 14, 13],
            'Jeremy' => [16, 1, 0]
        ];
        return $this->render('notes/index.html.twig', [
            'controller_name' => 'NotesController',
            'notes' => $notes

        ]);
    }
}
