<?php
/*
    Les sessions permettent de conserver des données d'une page à l'autre
    - Un utilisateur connecté
    - Panier de e-commerce

    Principe de fonctionnement
        - Lorsqu'un script PHP crée une session, il récupère sur le serveur les données qui sont associées à l'identifiant de session de l'utilisateur courant (token) qui est appelé "PHPSESSID"

        - Le script utilise la superglobal $_SESSION pour stocker les données

        - Une fois le navigateur fermé, les sessions sont supprimées

    Mise en pratique
        - session_start() appelé à chaque début de script, avant toute autre écriture HTML
        - $_SESSION s'utilise comme n'importe quel autre tableau
        - session_unset() pour vider le tableau $_SESSION du script
        - session_destroy() supprime la session stockée sur le serveur
*/
session_start(); // Si cette fonction n'est pas appelée, PHP ne crée pas $_SESSION
var_dump($_SESSION);
// Créer une session
$_SESSION['name'] = 'Loïc';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="1b_test_sessions.php">Test sessions</a>
</body>

</html>