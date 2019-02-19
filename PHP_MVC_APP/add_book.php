<?php

require_once 'common.php';

$genreRepo = new \App\Repository\GenreRepository($pdo);
$genreService = new \App\Services\GenreService($genreRepo);
$bookHandler = new \App\Http\BookHandler($template, $dataBinder);
$bookRepo = new \App\Repository\BookRepository($pdo);
$bookService = new \App\Services\BookService($bookRepo);
$bookHandler->add_book($genreService, $_POST, $bookService);