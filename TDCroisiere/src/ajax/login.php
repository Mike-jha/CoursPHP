<?php

require_once '../common.php';

header('Content-Type: application/json');


if ($result($_POST['usename'], $_POST['password'])) {
    array_map('trim', $_POST);

    // La fonction login retourne un tableau avec un type et un message
    // On peut directement mettre ce tableau dans la fonction json_encode
    echo json_encode(login($_POST['usename'], $_POST['password']), JSON_PRETTY_PRINT);
    exit();
}

echo json_encode(['status' => 'error', 'message' => 'Il n\'y a pas de login ou de mot de passe'], JSON_PRETTY_PRINT);
