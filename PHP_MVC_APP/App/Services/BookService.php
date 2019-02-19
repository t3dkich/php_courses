<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:27
 */

namespace App\Services;


use App\DTOs\BookDTO;
use App\Repository\BookRepository;

class BookService implements BookServiceInterface
{
    private $bookRepo;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepo = $bookRepository;
    }

    public function getAll(): \Generator
    {
        if (!isset($_SESSION['id'])) {
            return false;
        }

        return $this->bookRepo->getAll();
    }

    public function addBook(BookDTO $bookDTO): bool
    {
        if (!isset($_SESSION['id'])) {
            return false;
        }

        return $this->bookRepo->insert($bookDTO);
    }

    public function getMyBooks(int $userId): \Generator
    {
        if (!isset($_SESSION['id'])) {
            return false;
        }

        return $this->bookRepo->getMyBooks($userId);
    }

    public function getOneById($bookId): ?BookDTO
    {
        if (!isset($_SESSION['id'])) {
            return null;
        }

        $book = $this->bookRepo->getById($bookId);

        if ($book == null) {
            return null;
        }

        return $book;
    }

    public function update(BookDTO $bookDTO): bool
    {
        return $this->bookRepo->update($bookDTO);
    }

    public function remove(int $bookId): bool
    {
        return $this->bookRepo->delete($bookId);
    }
}