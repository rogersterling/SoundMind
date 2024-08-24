<?php

class ApiController {
    // Placeholder for database connection
    private $db;

    public function __construct() {
        // TODO: Initialize database connection
        $this->db = null;
    }

    public function getAllEntries() {
        // TODO: Fetch all entries from the database
        return [
            ['id' => 1, 'title' => 'First Entry', 'date' => '2023-06-01', 'mood' => 'positive', 'summary' => 'This is the first entry.'],
            ['id' => 2, 'title' => 'Second Entry', 'date' => '2023-06-02', 'mood' => 'negative', 'summary' => 'This is the second entry.'],
        ];
    }

    public function getEntry($id) {
        // TODO: Fetch specific entry from the database
        return ['id' => $id, 'title' => 'Sample Entry', 'date' => '2023-06-03', 'mood' => 'positive', 'summary' => 'This is a sample entry.'];
    }

    public function createEntry($data) {
        // TODO: Insert new entry into the database
        $id = 3; // Placeholder ID
        return array_merge(['id' => $id], $data);
    }

    public function updateEntry($id, $data) {
        // TODO: Update entry in the database
        return array_merge(['id' => $id], $data);
    }

    public function deleteEntry($id) {
        // TODO: Delete entry from the database
        return ['success' => true, 'message' => "Entry $id deleted successfully"];
    }
}