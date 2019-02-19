<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:19
 */

namespace App\Repository;


use App\DTOs\BookDTO;

class BookRepository extends RepositoryAbstract implements BookRepositoryInterface
{

    public function insert(BookDTO $bookDTO): bool
    {
        $this->db->query('
            insert into books 
              (title ,author, description, user_id, added_on, image, genre_id)
             VALUES (?, ?, ?, ?, ?, ?, ?)
        ')->execute([
            $bookDTO->getTitle(),
            $bookDTO->getAuthor(),
            $bookDTO->getDescription(),
            $bookDTO->getUser_id(),
            $bookDTO->getAdded_on(),
            $bookDTO->getImage(),
            $bookDTO->getGenre_id()
        ]);
        return true;
    }

    public function getMyBooks(int $userId): \Generator
    {
        return $this->db->query('
            select b.title, b.author, g.name genre_name, b.id
            from books b
            inner join genres g
            on b.genre_id = g.id
            where b.user_id = ?
       ')->execute([$userId])
            ->fetch(BookDTO::class);
    }

    public function getAll(): \Generator
    {
        return $this->db->query('
            select b.title, b.author, g.name genre_name, u.username, b.id
            from books b
            inner join genres g
            on b.genre_id = g.id
            inner join users u
            on b.user_id = u.id
       ')->execute([])
            ->fetch(BookDTO::class);
    }

    public function getById(int $bookId): ?BookDTO
    {
        return $this->db->query('
            select *
            from books
            where id = ?
       ')->execute([$bookId])
            ->fetch(BookDTO::class)
            ->current();
    }

    public function update(BookDTO $bookDTO): bool
    {
        $this->db->query('
            update books
            set title = ?, description = ?, author = ?, genre_id = ?, image = ?
            where id = ?
        ')->execute([
            $bookDTO->getTitle(),
            $bookDTO->getDescription(),
            $bookDTO->getAuthor(),
            $bookDTO->getGenre_id(),
            $bookDTO->getImage(),
            $bookDTO->getId()
        ]);
        return true;
    }

    public function delete(int $bookId)
    {
        var_dump($bookId);
        $this->db->query('
            delete from books
            where id = ?
        ')->execute([$bookId]);
        return true;
    }
}