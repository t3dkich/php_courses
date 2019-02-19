<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 11:49
 */

namespace App\DTOs;


class BookDTO
{
    private $id;
    private $title;
    private $author;
    private $description;
    private $user_id;
    private $added_on;
    private $image;
    private $genre_id;
    private $author_name;
    private $genre_name;
    private $username;

    public static function create($username, $title, $description, $author, $userId,
                                  $genreId, $addedOn, $image, $authorName, $genreName) {
        return (new BookDTO())
            ->setTitle($title)
            ->setDescription($description)
            ->setAuthor($author)
            ->setUser_id($userId)
            ->setGenre_id($genreId)
            ->setAdded_on($addedOn)
            ->setImage($image)
            ->setGenre_name($genreName)
            ->setUsername($username);
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return BookDTO
     */
    public function setUsername($username): BookDTO
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGenre_name()
    {
        return $this->genre_name;
    }

    /**
     * @param mixed $genre_name
     * @return BookDTO
     */
    public function setGenre_name($genre_name): BookDTO
    {
        $this->genre_name = $genre_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * @param mixed $author_name
     * @return BookDTO
     */
    public function setAuthorName($author_name): BookDTO
    {
        $this->author_name = $author_name;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getAdded_on()
    {
        return $this->added_on;
    }

    /**
     * @return mixed
     */
    public function getGenre_id()
    {
        return $this->genre_id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $added_on
     * @return BookDTO
     */
    public function setAdded_on($added_on): BookDTO
    {
        $this->added_on = $added_on;
        return $this;
    }

    /**
     * @param mixed $author
     * @return BookDTO
     */
    public function setAuthor($author): BookDTO
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @param mixed $description
     * @return BookDTO
     */
    public function setDescription($description): BookDTO
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param mixed $genre_id
     * @return BookDTO
     */
    public function setGenre_id($genre_id): BookDTO
    {
        $this->genre_id = $genre_id;
        return $this;
    }

    /**
     * @param mixed $id
     * @return BookDTO
     */
    public function setId($id): BookDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param mixed $image
     * @return BookDTO
     */
    public function setImage($image): BookDTO
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @param mixed $title
     * @return BookDTO
     */
    public function setTitle($title): BookDTO
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param mixed $user_id
     * @return BookDTO
     */
    public function setUser_id($user_id): BookDTO
    {
        $this->user_id = $user_id;
        return $this;
    }
}