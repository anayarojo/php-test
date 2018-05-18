<?php

init_set('display_errors', 1);
init_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../config.php';

$route = $GET['route'] ?? '/';

switch($route){
    case '/':
        require '../index.php';
        break;
    case '/admin':
        require '../admin/index.php';
        break;
    case '/admin/posts':
        require '../admin/posts.php';
        break;
}