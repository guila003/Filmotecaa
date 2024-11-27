<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;

class FilmController
{
    public function listFilms(): void
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        // Récupère l'instance de Twig
        $twig = TwigConfig::getTwig();
        
        // Rendre la vue et passer la liste des films
        echo $twig->render('film/list.html.twig', [
            'films' => $films,
        ]);
    }

    public function create()
    {
        echo "Création d'un film";
    }

    public function read(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);

        dd($film);
    }

    public function update()
    {
        echo "Mise à jour d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
}