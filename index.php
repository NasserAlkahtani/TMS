<?php

$request = $_SERVER['REQUEST_URI'];

// echo $request;

switch ($request) {
    case '/TMS/' :
        require __DIR__ . '/public/views/home/home.php';
        break;
    case '/TMS/home' :
        require __DIR__ . '/public/views/home/home.php';
        break;
    case '/TMS/about' :
        require __DIR__ . '/public/views/home/test.php';
        break;
    default:
        require __DIR__ . '/public/views/404/404.php';
        break;
}