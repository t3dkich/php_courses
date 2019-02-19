<?php

namespace App\DTOs;

class UserDTO
{
    private $id;
    private $username;
    private $password;
    private $full_name;
    private $born_on;

    public static function create($id, $username, $password, $full_name, $born_on) {
        return (new UserDTO())
            ->setId($id)
            ->setUsername($username)
            ->setPassword($password)
            ->setFull_name($full_name)
            ->setBorn_on($born_on);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): UserDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): UserDTO
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

    public function getFull_name()
    {
        return $this->full_name;
    }

    public function setFull_name($full_name): UserDTO
    {
        $this->full_name = $full_name;
        return $this;
    }


    public function getBorn_on()
    {
        return $this->born_on;
    }

    public function setBorn_on($born_on): UserDTO
    {
        $this->born_on = $born_on;
        return $this;
    }
}