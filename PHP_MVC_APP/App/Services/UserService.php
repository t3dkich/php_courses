<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 10:34
 */

namespace App\Services;

use App\Repository\UserRepositoryInterface;
use App\DTOs\UserDTO;

class UserService
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function current(): ?UserDTO
    {
        $user = $this->userRepository->findOneById($_SESSION['id']);

        if ($user === null) {
            return null;
        }

        return $user;
    }

    public function login(UserDTO $userDTO): ?UserDTO
    {
        $userFromDb = $this->userRepository->findOneByUsername($userDTO->getUsername());
        if ($userFromDb === null) {
            return null;
        }

        if (!password_verify($userDTO->getPassword(), $userFromDb->getPassword())) {
            return null;
        }

        return $userFromDb;
    }

    public function register(UserDTO $userDTO, string $confirmPassword): bool
    {
        if (null != $this->userRepository->findOneByUsername($userDTO->getUsername())) {
            return false;
        }

        if ($userDTO->getPassword() !== $confirmPassword) {
            return false;
        }

        $this->hashingPass($userDTO);

        return $this->userRepository->insert($userDTO);
    }

    public function hashingPass(UserDTO $userDTO): void
    {
        $hashPass = password_hash($userDTO->getPassword(), PASSWORD_DEFAULT);
        $userDTO->setPassword($hashPass);
    }


}