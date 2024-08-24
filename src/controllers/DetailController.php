<?php

namespace App\Controllers;

class DetailController
{
    public function show($id)
    {
        // Fetch the entry details based on $id
        $entry = $this->getEntryById($id);

        // Set the current page to 'detail'
        $currentPage = 'detail';

        // Load the detail view
        ob_start();
        include __DIR__ . '/../views/detail.php';
        $content = ob_get_clean();

        // Load the layout
        include __DIR__ . '/../views/layout.php';
    }

    private function getEntryById($id)
    {
        // Implement the logic to fetch entry details from the database
        // For now, we'll return a dummy entry
        return [
            'id' => $id,
            'title' => 'Sample Entry',
            'content' => 'This is a sample entry content.',
            'date' => date('Y-m-d'),
            'sentiment' => 'positive'
        ];
    }
}