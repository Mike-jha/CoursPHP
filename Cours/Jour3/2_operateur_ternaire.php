<?php

$admin = false;

$message = '';

// Simple condition
if ($admin) {
    $message = 'Vous êtes admin';
} else {
    $message = "Vous n'êtes pas admin";
}

// Opérateur ternaire
$message = ($admin) ? 'Vous êtes admin' : "Vous n'êtes pas admin";
// Même résultat que la condition if mais en plus court 
// (condition) ? alors : sinon

$username = isset($_POST['username']) ? $_POST['username'] : null;
// Si $_POST['username'] est définit alors on l'affecte dans $username sinon $username sera null
// l'opérateur coalescent
$username = $_POST['username'] ?? null; // Fait la même chose que précedemment