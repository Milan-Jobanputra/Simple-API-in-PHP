<?php
header("Content-Type: application/json");

// Include the appropriate endpoint file based on the requested URL
$path = $_SERVER['REQUEST_URI'];
$path = explode('/', $path);

if ($path[1] === 'api' && isset($path[2])) {
    $endpoint = $path[2];
    $endpointFile = __DIR__ . "/api/{$endpoint}.php";

    if (file_exists($endpointFile)) {
        require_once $endpointFile;
    } else {
        http_response_code(404);
        echo json_encode(["message" => "Endpoint not found"]);
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "Invalid request"]);
}