<?php

// Ecrire une fonction qui retourne le nombre depuis début d'années
/**
 * Retourne le nombre de minutes écoulée depuis janvier 2020
 */
function minutesDepuisJanvier() {
    $debutAnnee = mktime(0, 0, 0, 1, 1, 2020);
    return round((time() - $debutAnnee)/60);
}

echo "Nombre de minute depuis le 1er janvier : ".minutesDepuisJanvier();

$timestamp = mktime(0, 0, 0, 8, 15, 2010);
function minute($timestamp) {
    return round((time() - $timestamp)/60);
}

echo "Nombre de minute depuis le 15 aout 2010 : ".minute($timestamp);

// function count($var) { ... }
// strtolower('ok');
// function strtolower($str) {}
/*
 - Ecrire une fonction qui retourne l'aire d'un rectangle avec les deux dimensions données en paramètre
 - Modifier cette fonction avec le deuxième paramètre facultatif (=0) s'il est à 0 alors ce sera l'aire d'un carré
 - Ecrire la fonction getUser qui retournera un tableau avec des données au hasard (nom, prenom, email)
 - Ecrire une seconde fonction getPrenom qui va retourner le prénom envoyé par getUser (appel de getUser dans getPrenom)
 - Ecrire la fonction getInfo avec en paramètre une chaine contenant l'info demandé ("prenom", "nom" etc.) tester si elle existe
 - getInfo('prenom');
 - Ecrire une fonction url qui demandera un lien et un nom en paramètre et qui retournera un code html avec une balise a
 - getUrl('https://oviglo.fr', 'Lien vers ma page')
 - '<a href="https://oviglo.fr">Lien vers ma page</a>
 - Appeler cette fonction dans le code html ci dessous
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice fonctions</title>
</head>
<body>
    
</body>
</html>