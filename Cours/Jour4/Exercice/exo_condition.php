<?php 

$estValide = true;
$categorie = 'PHP';
$score = 10;

// A partir de ces 3 variables écrire les conditions suivantes:
// Si $estValide est à true alors on affiche "L'article est validé"
if ($estValide) {
    echo "L'article est validé";
}

echo '<br/>';

// Si $estValide est à true $categorie est à "PHP" on affiche "L'article PHP est validé"
if ($estValide && $categorie == 'PHP') {
    echo "L'article PHP est validé";
}

echo '<br/>';

// Afficher le score s'il est supérieur à 5 ET si la catégorie est différente de Javascript
if ($score > 5 && $categorie !== 'Javascript') {
    echo $score;
}

echo '<br/>';

// Afficher un message "Categorie programmation" si la catégorie est egale a PHP OU Javascript
// Sinon si la categorie est egale à "Photoshop", afficher "Categorie infographie"
if ($categorie == 'PHP' || $categorie == 'Javascript') {
    echo "categorie programmation";
} elseif ($categorie == 'Photoshop'){
    echo "categorie infographie";
}

echo '<br/>';

// in_array() // retourne vrai si un élément est dans un tableau 
if (in_array($categorie, ['PHP', 'Javascript'])) {
    echo "categorie programmation";
}

echo '<br/>';

