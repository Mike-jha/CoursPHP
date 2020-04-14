<?php

/*
    - Créer une classe User avec les propriétés privés username, password et email
    - Email le constructeur qui demande ces 3 propriétés pour formater les données cripter le mot de passe
    - Créer 2 utilisateur sur cette page

    - Ecrire les getters et setters des proprietés (toujours avec test des données et criptage du password)
*/

require_once 'User.php';

$asterix = new User('Asterix', 'asterix@gaules.fr', '123Azerty');
$obelix = new User('Obelix', 'lebonsanglier@taverne.fr', 'motDePasse');

var_dump($asterix);

if ($asterix->testPassword('pass456')) {
    echo 'Mot de passe valide';
}
