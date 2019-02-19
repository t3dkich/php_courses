<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:08
 */

namespace App\Services;


use App\Repository\GenreRepository;

class GenreService implements GenreServiceInterface
{
    private $genreRepo;

    public function __construct(GenreRepository $genreRepository)
    {
        $this->genreRepo = $genreRepository;
    }

    public function get(): \Generator
    {
        return $this->genreRepo->get();
    }
}