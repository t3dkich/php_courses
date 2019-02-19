<?php

require_once 'common.php';

$bookHandler = new \App\Http\BookHandler($template, $dataBinder);
$bookRepo = new \App\Repository\BookRepository($pdo);
$bookService = new \App\Services\BookService($bookRepo);
$bookHandler->all_books($bookService);