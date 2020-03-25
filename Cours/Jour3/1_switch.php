<?php

/*
Le switch permet d'éxecuter du code en fonction de la valeur d'une variable
*/

$status = 2;
// 1 = simple utilisateur, 2 = modérateur, 3 = admin

switch ($status) { // en fonction de $status
    case 1: // Quand $status = 1...
        echo 'Vous êtes simple utilisateur';
    break; // Quitte le switch, sinon éxecute les 'case' suivantes

    case 2: // Quand $status = 2...
        echo 'Vous êtes modérateur';
    break;

    case 3: 
        echo 'Vous êtes admin!';
    break;

    default: // si aucune 'case' correspond
        echo 'On ne sait pas ce que vous êtes!';
}

// Autre exemple sans break
$roles = '';

switch ($status) {
    case 3:
        $roles .= ' ADMIN'; // $roles = $roles . " ADMIN";

        // no break
    case 2:
        $roles .= ' MODO';

        // no break
    case 1:
        $roles .= ' USER';
}

echo '<br/>';
echo $roles;