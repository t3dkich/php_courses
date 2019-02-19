<?php

require_once 'common.php';

$userRepo = new \App\Repository\UserRepository($pdo);
$userService = new \App\Services\UserService($userRepo);
$httpHandler = new \App\Http\HttpHandler($template, $dataBinder);
$httpHandler->index($userService);