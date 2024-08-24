<?php

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