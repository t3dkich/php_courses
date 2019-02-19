<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:10
 */

namespace App\Http;


use App\DTOs\BookDTO;
use App\Services\BookService;
use App\Services\GenreService;

class BookHandler extends HttpHandlerAbstract
{
    public function add_book(GenreService $genreService, array $formData, BookService $bookService)
    {
        if (!isset($_SESSION['id'])) {
            $this->redirect('login');
        }

        if (!isset($formData['add_book'])) {
            $this->render('book/add_book', $genreService->get());
        } else {
            /** @var BookDTO $book */
            $book = $this->dataBinder->bind(BookDTO::class, $formData);
            $book->setUser_id($_SESSION['id']);
            if ($book != null) {
                $bookService->addBook($book);
                $this->redirect('profile');
            }
        }
    }

    public function my_books(BookService $bookService)
    {
        if (!isset($_SESSION['id'])) {
            $this->redirect('login');
        }

        $books = $bookService->getMyBooks($_SESSION['id']);
        $this->render('book/my_books', $books);
    }

    public function all_books(BookService $bookService)
    {
        if (!isset($_SESSION['id'])) {
            $this->redirect('login');
        }

        $books = $bookService->getAll();
        $this->render('book/all_books', $books);
    }

    public function edit_book(BookService $bookService, $getData, $postData, GenreService $genreService)
    {
        if (!isset($_SESSION['id'])) {
            $this->redirect('login');
        }

        if (!isset($postData['edit_book'])) {
            $book = $bookService->getOneById($getData['id']);
            $genres = $genreService->get();

            if ($book == null) {
                $this->render('error/error');
            }

            $this->render('book/edit', [$genres, $book]);
        } else {
            $book = $this->dataBinder->bind(BookDTO::class, $postData);

            if ($bookService->update($book)) {
                $this->redirect('my_books');
            }
        }
    }

    public function delete(int $bookId, BookService $bookService): void
    {

         $bookService->remove($bookId);
         $this->redirect('my_books');
    }
}