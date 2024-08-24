<?php

class DetailController {
    public function show($id) {
        // TODO: Fetch the journal entry from the database
        // For now, we'll use a dummy entry
        $entry = [
            'id' => $id,
            'date' => date('Y-m-d H:i:s'),
            'mood' => 'Happy',
            'summary' => 'This is a sample summary of the journal entry.',
            'audio_url' => 'path/to/audio/file.mp3'
        ];

        // Load the detail view
        require_once 'src/views/detail.php';
    }
}