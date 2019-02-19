<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 09:45
 */

namespace App\Http;


use App\DTOs\UserDTO;
use App\Services\UserService;

class HttpHandler extends HttpHandlerAbstract
{
    public function index(UserService $userService)
    {
        if (isset($_SESSION['id'])) {
            $this->redirect('profile', $userService->current());
        } else {

            $this->render('home/index');
        }
    }

    public function profile(UserService $userService) {
        if (isset($_SESSION['id'])) {
            $user = $userService->current();
            $this->render('user/profile', $user);
        } else {
            $this->redirect('login');
        }
    }

    public function login(UserService $userService, array $postData)
    {
        $this->checkIfLoggedIn();
        if (isset($postData['login'])) {
            $this->handleLogin($userService, $postData);
        } else {
            $this->render('user/login');
        }
    }

    public function register(UserService $userService, array $formData)
    {
        $this->checkIfLoggedIn();
        if (!isset($formData['register'])) {
            $this->render('user/register');
        } else {
            $this->handleRegister($userService, $formData);
        }
    }

    public function handleLogin(UserService $userService, array $postData): void
    {
        $userBind = $this->dataBinder->bind(UserDTO::class, $postData);

        $dbUser = $userService->login($userBind);
        /** @var UserDTO $dbUser */
        if ($dbUser !== null) {
            $_SESSION['id'] = $dbUser->getId();
            $this->redirect('profile');
        } else {
            $this->render('error/error', ['message'=>'User or Password gi nqa!!! smeshen']);
        }
    }

    public function handleRegister(UserService $userService, array $postData): void
    {
        /** @var UserDTO $userBind */
        $userBind = $this->dataBinder->bind(UserDTO::class, $postData);
        $_SESSION['after_reg'] = $userBind->getFull_name();
        if ($userService->register($userBind, $postData['confirm_password'])) {
            $this->redirect('login');
        } else {
            $this->render('error/error');
        }
    }

    public function checkIfLoggedIn() {
        if (isset($_SESSION['id'])) {
            $this->redirect('profile');
        }
    }
}