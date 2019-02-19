<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:18
 */

namespace App\Repository;


use App\DTOs\BookDTO;

interface BookRepositoryInterface
{
    public function insert(BookDTO $bookDTO) : bool;
    public function getMyBooks(int $userId) : \Generator;
    public function getAll(): \Generator;
    public function getById(int $bookId): ?BookDTO;
    public function update(BookDTO $bookDTO) : bool;
    public function delete(int $bookId);
}