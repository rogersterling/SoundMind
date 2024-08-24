<?php

require_once __DIR__ . '/Controller.php';

class InsightsController extends Controller
{
    public function index()
    {
        $this->render('insights', ['title' => 'SoundMind - Insights']);
    }
}