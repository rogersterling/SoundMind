<?php

require_once __DIR__ . '/Controller.php';

class DetailController extends Controller
{
    public function index()
    {
        $this->render('detail', ['title' => 'SoundMind - Entry Detail']);
    }
}