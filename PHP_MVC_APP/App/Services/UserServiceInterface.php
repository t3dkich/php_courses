<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 10:34
 */

namespace App\Services;


use App\DTOs\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $userDTO, string $confirmPassword) : bool;
    public function login(UserDTO $userDTO) : bool;
    public function current(): ?UserDTO;
}