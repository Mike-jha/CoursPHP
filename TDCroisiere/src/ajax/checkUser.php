<?php

require_once '../common.php';

header('Content-Type: application/json');

if (isset($_GET['username']) && isset($_GET['email'])) {
    if (isUserExists($_GET['usename'], $_GET['email'])) {
        echo json_encode(['type' => 'error', 'message' => 'L\'utilisateur existe déja'], JSON_PRETTY_PRINT);
        exit();
    }
}

// L'utilisateur n'existe pas 
echo json_encode(['type' => 'success', 'message' => ''], JSON_PRETTY_PRINT);
