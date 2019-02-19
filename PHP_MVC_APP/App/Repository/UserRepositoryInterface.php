<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 10:24
 */

namespace App\Repository;


use App\DTOs\UserDTO;

interface UserRepositoryInterface
{
    public function insert(UserDTO $userDTO) : bool;
    public function findOneByUsername(string $username) : ?UserDTO;
    public function findOneById(int $id): ?UserDTO;
}