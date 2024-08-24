<?php

class HomeController {
    public function index() {
        // TODO: Fetch the journal entries from the database
        // For now, we'll use dummy entries
        $entries = [
            ['id' => 1, 'title' => 'First Entry', 'date' => '2023-06-01', 'summary' => 'This is the first entry.'],
            ['id' => 2, 'title' => 'Second Entry', 'date' => '2023-06-02', 'summary' => 'This is the second entry.'],
            // ... more entries
        ];

        $entriesHtml = '';
        foreach ($entries as $entry) {
            $entriesHtml .= "
            <div class='entry-item' data-id='{$entry['id']}'>
                <h3 class='entry-title'>{$entry['title']}</h3>
                <p class='entry-date'>{$entry['date']}</p>
                <p class='entry-summary'>{$entry['summary']}</p>
            </div>";
        }

        // Load the home view
        require_once 'src/views/home.php';
    }
}