<?php

namespace App\Controllers;

class SettingsController
{
    public function index()
    {
        $currentPage = 'settings';
        $apiKey = $this->getApiKey(); // Implement this method to retrieve the stored API key
        
        ob_start();
        include __DIR__ . '/../views/settings.php';
        $content = ob_get_clean();

        include __DIR__ . '/../views/layout.php';
    }

    private function getApiKey()
    {
        // TODO: Implement actual API key retrieval from a secure storage
        return isset($_SESSION['openai_api_key']) ? $_SESSION['openai_api_key'] : '';
    }

    public function saveApiKey()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['api_key'])) {
            $apiKey = trim($_POST['api_key']);
            // TODO: Implement secure storage of the API key (e.g., in an encrypted database)
            $_SESSION['openai_api_key'] = $apiKey;
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid request']);
        }
    }

    public function deleteData()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Implement actual data deletion logic
            // This should delete all user data, including journal entries and the API key
            session_destroy();
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid request']);
        }
    }
}