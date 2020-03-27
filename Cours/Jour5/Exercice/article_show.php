<?php

require_once('database.php');

$pdo = getPDO();
$article = getArticle(1); // Recuperer $_GET['id] pour afficher l'article en fonction du lien 