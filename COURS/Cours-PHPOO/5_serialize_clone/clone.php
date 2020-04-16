<?php

spl_autoload_register();

$pacifica = new Boat();
$pacifica->setName('Pacifica');
$pacifica->setVoyagers([
    new Voyager('John Smith'),
    new Voyager('Marge Simpson'),
]);

// PHP ne fait pas une copie de l'objet mais de l'identifiant
$blackPearl = $pacifica;

$blackPearl->setName('Black Pearl');

echo 'Nom du bateau pacifica: ' . $pacifica->getName();

// La fonction PHP "clone" permet de créer un nouvel objet
$blackPearl = clone $pacifica;
// clone fait un foreach sur chaque propriétés et les copie copies avec un =
// le problème est que les propriétés contenant un objet ne sont pas clonées

// On modifie le nom du premier voyager du bateau
$blackPearl->getVoyagers()[0]->setName('Homer Simpson');
$pacifica->setName('Pacifica');

echo 'Nom du bateau pacifica: ' . $pacifica->getName() . '<br/>';
echo 'Nom du bateau black Pearl: ' . $blackPearl->getName();
