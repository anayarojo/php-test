<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
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
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once '../config.php';

$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);

var_dump($baseUrl);

$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;

$route = new RouteCollector();
$route->get('/', function () use ($pdo){
    $query = $pdo->prepare("SELECT * FROM blogposts ORDER BY id DESC");
    $query->execute();
    $blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
    include '../views/index.php';
});

$dispatcher = new Phroute\Phroute\Dispatcher($route->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;