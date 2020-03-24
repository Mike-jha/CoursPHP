<?php

// Test s'il y a des données envoyées
if (!empty($_POST)) { // isset($_POST['prenom'])
    // traitement des données
    // on retire les espaces au début et à la fin avec trim(), '    OK     '
    $prenom = trim($_POST['prenom']);
    $nom = trim($_POST['nom']);
    // le nom et le prenom doivent avoir entre 3 et 60 charactères
    // donc si c'est inférieur a ca, o affiche un message d'erreur
    if (strlen($prenom) < 3 || strlen($prenom) > 60) {
        echo 'Le prenom doit etre entre 3 et 60 caracteres<br/>';
    }

    if (strlen($nom) < 3 || strlen($nom) > 60) {
        echo 'Le nom doit etre entre 3 et 60 caracteres<br/>';
    }

    /*
        filtrer_var permet de valider une chaine avec un filtre specifique
        https://www.php.net/manual/fr/function.filter-var.php 
    */
    // ici filter_var va tester si l'email est valide, retourne un boléen
    // FILTER_SANITIZE_EMAIL nettoie la chaine en supprimant les caracteres interdits
    $mailValid = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    // FILTER_SANITIZE_EMAIL valide l'adresse email
    $mailValid = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$mailValid) {
        echo "L'adresse email n'est pas valide <br/>";
        // die(); //arrete le script, on peut utiliser aussi exit();
    }

    // Pour savoir quel bouton "submit" a été cliqué
    if (isset($_POST['envoi_admin'])) {
        echo 'Envoyé à l\'administrateur';
    }
}
