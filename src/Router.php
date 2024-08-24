<?php

namespace App;

require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/controllers/InsightsController.php';
require_once __DIR__ . '/controllers/SettingsController.php';
require_once __DIR__ . '/controllers/DetailController.php';

use App\Controllers\HomeController;
use App\Controllers\InsightsController;
use App\Controllers\SettingsController;
use App\Controllers\DetailController;

class Router
{
    public function route($uri)
    {
        switch ($uri) {
            case '/':
                $controller = new HomeController();
                return $controller->index();
            case '/insights':
                $controller = new InsightsController();
                return $controller->index();
            case '/settings':
                $controller = new SettingsController();
                return $controller->index();
            case '/settings/save-api-key':
                $controller = new SettingsController();
                return $controller->saveApiKey();
            case '/settings/delete-data':
                $controller = new SettingsController();
                return $controller->deleteData();
            default:
                if (preg_match('/^\/entry\/(\d+)$/', $uri, $matches)) {
                    $controller = new DetailController();
                    return $controller->show($matches[1]);
                }
                // 404 Not Found
                header("HTTP/1.0 404 Not Found");
                return '404 Not Found';
        }
    }
}