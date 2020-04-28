<?php

// var_dump($_POST);
$msg = '';
$status = 'error';
// Si le formulaire a été envoyé
if (!empty($_POST)) {
    array_map('trim', $_POST);
    array_map('strip_tags', $_POST);

    if (strlen($_POST['name']) < 3 || strlen($_POST['name']) > 50) {
        $msg = 'Le nom saisi est trop court';
    }

    if (strlen($_POST['description']) < 5) {
        $msg = 'La description du ticket est trop courte';
    }

    if (!in_array($_POST['priority'], ['low', 'normal', 'high'])) {
        $msg = 'La priorité est invalide';
    }

    // Aucune erreur
    if (empty($msg)) {
        $status = 'success';
        $msg = 'Le ticket a bien été envoyé';
    } else {
        // Générer une erreur
        $msg = 'Une erreur est survenue lors de l\'envoi du formulaire';
    }
}

// Retourner $msg et $status au format json

$tickets = [
    [
        'name' => 'John Doe',
        'description' => 'Probleme d\'envoie de fichier',
        'priority' => 'high'
    ],
    [
        'name' => 'Michou Galabru',
        'description' => 'Bug d\'affichage photo en avatar',
        'priority' => 'normal'
    ],
]

// Indique au navigateur que ce script retourne un format json (et pas html)
header('Content-Type: application/json');
// Affiche les articles au format JSON
echo json_encode([
     'msg' => $msg,
     'status' => $status,
], JSON_PRETTY_PRINT);

