<?php

spl_autoload_register();
session_start();

$template = new \Core\Template();
$dataBinder = new \Core\DataBinder();
$db = new PDO('mysql:host=localhost;dbname=exam', 'root', '');
$pdo = new \Database\PDODatabase($db);
$userRepository = new \App\Repository\UserRepository($pdo);
$userService = new \App\Services\UserService($userRepository);
$httpHandler = new \App\Http\HttpHandler($template, $dataBinder);