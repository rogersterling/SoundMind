<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Simple router
$request = $_SERVER['REQUEST_URI'];

// Remove query string from the request
$request = strtok($request, '?');

// Remove base path from the request
$request = str_replace('/public', '', $request);

switch ($request) {
    case '/' :
        require __DIR__ . '/../src/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case '/detail' :
        require __DIR__ . '/../src/controllers/DetailController.php';
        $controller = new DetailController();
        $controller->index();
        break;
    case '/insights' :
        require __DIR__ . '/../src/controllers/InsightsController.php';
        $controller = new InsightsController();
        $controller->index();
        break;
    case '/settings' :
        require __DIR__ . '/../src/controllers/SettingsController.php';
        $controller = new SettingsController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../src/views/404.php';
        break;
}