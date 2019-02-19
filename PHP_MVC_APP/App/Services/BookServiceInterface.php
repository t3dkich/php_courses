<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:25
 */

namespace App\Services;


use App\DTOs\BookDTO;

interface BookServiceInterface
{
    public function addBook(BookDTO $bookDTO) : bool;
    public function getMyBooks(int $userId) : \Generator;
}