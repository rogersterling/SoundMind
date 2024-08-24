<?php

require_once __DIR__ . '/../src/controllers/ApiController.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
$input = json_decode(file_get_contents('php://input'), true);

$controller = new ApiController();

switch ($request[0]) {
    case 'entries':
        switch ($method) {
            case 'GET':
                if (isset($request[1])) {
                    echo json_encode($controller->getEntry($request[1]));
                } else {
                    echo json_encode($controller->getAllEntries());
                }
                break;
            case 'POST':
                echo json_encode($controller->createEntry($input));
                break;
            case 'PUT':
                if (isset($request[1])) {
                    echo json_encode($controller->updateEntry($request[1], $input));
                } else {
                    http_response_code(400);
                    echo json_encode(['error' => 'Entry ID is required for update']);
                }
                break;
            case 'DELETE':
                if (isset($request[1])) {
                    echo json_encode($controller->deleteEntry($request[1]));
                } else {
                    http_response_code(400);
                    echo json_encode(['error' => 'Entry ID is required for deletion']);
                }
                break;
            default:
                http_response_code(405);
                echo json_encode(['error' => 'Method not allowed']);
                break;
        }
        break;
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Not found']);
        break;
}