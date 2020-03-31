<?php
ini_set("display_errors", 1);

require_once './../src/common.php';

// On récupére la valeur GET "p" qui se trouve dans le lien
$page = $_GET['p'] ?? 'accueil';

// Sécurité: empêche de charger n'importe quel fichier
// $page = str_replace('/', '', $page);
// Teste si $page contient d'autres caractère que des lettres en majuscule et minuscule
if (!preg_match('/^[a-zA-Z]*$/', $page)) {
    $page = 'accueil';
}

// S'il y a la chaine "admin_" dans cette variable
if (false !== strpos($page, 'admin')) {
    $page = substr($page, 6); // On supprime "admin_" de la chaîne
    checkAdmin(); // Test si l'utilisateur est administrateur
    require_once "./../src/page/admin/$page.php"; // Charge la page dans le dossier admin
} else {
    require_once "./../src/page/$page.php"; // Charge la page
}
