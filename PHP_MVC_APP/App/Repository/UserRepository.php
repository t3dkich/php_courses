<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 10:24
 */

namespace App\Repository;


use App\DTOs\UserDTO;

class UserRepository extends RepositoryAbstract implements UserRepositoryInterface
{
    public function findOneById(int $id): ?UserDTO
    {
        return $this->db->query('
            select id, username, password, full_name, born_on
             from users
             where id = ?
        ')->execute([$id])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function insert(UserDTO $userDTO): bool
    {
        $this->db->query('
            insert into users 
              (username, password, full_name, born_on)
               VALUES (?, ?, ?, ?) 
        ')->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
            $userDTO->getFull_name(),
            $userDTO->getBorn_on()
        ]);
        return true;
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
        return $this->db->query('
            select id, username, password, full_name, born_on
             from users
             where username = ?
        ')->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }
}