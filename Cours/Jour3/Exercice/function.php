<?php

/**
 * transforme une chaine en retirant les espaces.
 * 
 * @param string $str Chaîne à tranformer
 * 
 * @return string Chaîne transformé
*/
function getRealString(string $str): string {
    return trim($str);
}

/**
 * Affiche un élément html
 * 
 * @param string $nom Nom de l'utilisateur
 * @param string $image Lien de l'image
 * 
 * @return string code Html
*/
function getAccountButton(string $nom, string $image) {
    return '<section><span>'.$nom.'</span><img src="'.$image.'" alt="avatar"</section>';
}