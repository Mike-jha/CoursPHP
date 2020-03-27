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
echo '<br/>';

$timestamp = mktime(0, 0, 0, 8, 15, 2010);
function minute($timestamp) {
    return round((time() - $timestamp)/60);
}

echo "Nombre de minute depuis le 15 aout 2010 : ".minute($timestamp);
echo '<br/>';

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
$longueur = 5;
$largeur = 0;
function getRectangleArea($longueur, $largeur) {
    if ($largeur !== 0) {
        $result = $longueur * $largeur;
    } else {
        $result = $longueur * $longueur;
    }
    return $result;
}
echo "L'aire du rectangle que nous avons calculé est de : ".getRectangleArea($longueur, $largeur);
echo '<br/>';

function getUser($prenom = 'Mike', $nom = 'Krimm', $email = 'moi@cmoi.fr') {
    return [
        'Prenom' => $prenom,
        'Nom' => $nom,
        'Email' => $email 
    ];
}

function getPrenom() {
    $monInfo = getUser();
    return $monInfo['Prenom'];
}

function getInfo($parametre) {
	$monInfo2 = getUser();
	if(isset($monInfo2[$parametre])){
		return $monInfo2[$parametre];
	}
}

function getUrl($nom, $href) {
    return '<a href="'.$href.'">'.$nom.'</a>';
}

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