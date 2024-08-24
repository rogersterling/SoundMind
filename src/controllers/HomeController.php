<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Fetch entries (this is a placeholder, replace with actual data fetching logic later)
        $entries = $this->getDummyEntries();

        $currentPage = 'home';

        // Pass $entries to the view
        include __DIR__ . '/../views/layout.php';
    }

    private function getDummyEntries()
    {
        // This is temporary dummy data. Replace with database queries later.
        return [
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
    }
}