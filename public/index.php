<?php

require_once __DIR__ . '/../src/Router.php';

$router = new App\Router();
$uri = $_SERVER['REQUEST_URI'];
echo $router->route($uri);