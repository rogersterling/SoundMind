<?php

require_once __DIR__ . '/Controller.php';

class HomeController extends Controller
{
    public function index()
    {
        $entries = [
            [
                'id' => 1,
                'title' => 'Feeling excited and free',
                'date' => 'Aug 23',
                'sentiment' => 'positive',
                'briefSummary' => 'Today was an amazing day. I felt liberated and full of energy.'
            ],
            [
                'id' => 2,
                'title' => 'Lonely and down',
                'date' => 'Aug 22',
                'sentiment' => 'negative',
                'briefSummary' => 'Struggled with feelings of isolation. Need to reach out to friends.'
            ],
            [
                'id' => 3,
                'title' => 'Happy for new friends',
                'date' => 'Aug 21',
                'sentiment' => 'positive',
                'briefSummary' => 'Met some great people at the community event. Feeling grateful.'
            ],
        ];

        include __DIR__ . '/../views/home.php';
    }
}