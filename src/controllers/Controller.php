<?php

class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);
        require __DIR__ . "/../views/{$view}.php";
    }
}