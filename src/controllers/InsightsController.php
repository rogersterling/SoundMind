<?php

namespace App\Controllers;

class InsightsController
{
    public function index()
    {
        // TODO: Fetch journal entries from the database
        // For now, we'll use dummy data
        $entries = [
            ['id' => 1, 'date' => '2023-04-01', 'mood' => 'positive', 'summary' => 'Had a great day at work.'],
            ['id' => 2, 'date' => '2023-04-02', 'mood' => 'negative', 'summary' => 'Felt stressed about upcoming deadline.'],
            ['id' => 3, 'date' => '2023-04-03', 'mood' => 'positive', 'summary' => 'Enjoyed a relaxing weekend with family.'],
        ];

        $currentPage = 'insights';

        ob_start();
        include __DIR__ . '/../views/insights.php';
        $content = ob_get_clean();

        include __DIR__ . '/../views/layout.php';
    }
}