<?php

http_response_code(200);

header('Content-Type: application/json; charset=UTF-8');

header('Access-Control-Allow-Origin: *');

$response = [
    'header()',
    'authentication',
    'settings',
];
echo json_encode($response, JSON_FORCE_OBJECT);
