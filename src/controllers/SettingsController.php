<?php

require_once __DIR__ . '/Controller.php';

class SettingsController extends Controller
{
    public function index()
    {
        $this->render('settings', ['title' => 'SoundMind - Settings']);
    }
}