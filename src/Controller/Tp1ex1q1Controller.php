<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class Tp1ex1q1Controller extends AbstractController

{
    #[Route('/date-php', name: 'date_php')]
    public function datePHP(): Response
    {
        $timezone = new \DateTimeZone('Europe/Paris');
        $date = new \DateTime('now', $timezone);
        $dateFormatee = $date->format('d/m/Y H:i:s');
        return new Response(
            '<html><body><h1>Date et heure : ' . $dateFormatee. '</h1></body></html>'
        );
    }

    #[Route('/date-twig', name: 'date_twig')]
    public function dateTwig(): Response
    {
        $timezone = new \DateTimeZone('Europe/Paris');
        $date = new \DateTime('now', $timezone);

        return $this->render('TP1/date.html.twig', [
            'date' => $date->format('d/m/Y H:i:s'),
        ]);
    }

    #[Route('/', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('TP1/accueil.html.twig');
    }

    #[Route('/salutation', name: 'salutation', methods: ['GET'])]
    public function salutation(Request $request): Response
    {
        $prenom = $request->query->get('prenom');
        $nom    = $request->query->get('nom');
        $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));

        return $this->render('TP1/salutation.html.twig', [
            'prenom' => $prenom,
            'nom'    => $nom,
            'date'   => $date->format('d/m/Y H:i:s'),
        ]);
    }

    #[Route('/javascript', name: 'javascript')]
    public function javascript(): Response
    {
        return $this->render('TP1/javascript.html.twig');
    }

}
