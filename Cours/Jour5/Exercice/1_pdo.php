<?php

/*
    Pour la gestion des bases de données en PHP
    On utilise la bibliotheque PDO (PHP Data Object)

    Lors de la création de l'objet PDO, il faut lui envoyer les parametres suivants:

    - Data Source Name (DSN): chaine de caractere qui "résume" les parametres de connexion a la base de données

    - Nom d'utilisateur
    - Mot de passe

    http://php.net/manual/fr/ref.pdo-mysql.connection.php
*/
error_reporting(E_ALL);
ini_set('display_errors', true);
// Création de la chaîne de conexion DSN
$dsn = 'mysql:host=localhost;dbname=wf3_test';

// Création d'un objet PDO avec le DSN, user, password
$pdo = new PDO($dsn, 'root', 'root'); // rajouter root en mot de passe pour Mac

// Dire a PDO d'afficher les erreurs
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Creation d'une table "article"
$query = '
    CREATE TABLE article (
        id INT(11) NOT NULL AUTO_INCREMENT,
        title VARCHAR(80) NOT NULL,
        date_create DATE NOT NULL,
        content TEXT NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB;
';

// Execution de la requête
// $pdo->exec($query); // '->' veut dire qu'on appelle une fonction de l'objet (groupe) PDO

// Isertion de données
$query = " INSERT INTO article (title, date_create, content)
VALUES ('Premier article', '2020-03-27', 'Mon super article')";

// $pdo->exec($query); // Execution de la requete INSERT

$title = "Deuxieme article";
$date = '2019-12-01';
$content = 'Mon super article';

// Demande a PDO de "preparer" une requete, PDO va retourner un objet PDOStatement
$prep= $pdo->prepare("INSERT INTO article (title, date_create,content)
value(?,?,?)");

// Remplace les inconnues (?) par des variables PHP
// Passer par bindValue permet a PDO de controler les valeurs
// Permet aussi d'executer plusieurs fois la meme requete dans le script
$prep->bindValue(1,$title);
$prep->bindValue(2,$date);
$prep->bindValue(3,$content);

// Executer la requete
// $prep->execute();

// var_dump( $pdo->errorInfo() );
/*
$articleSelect = $pdo->prepare("SELECT * FROM article");
$articleSelect->execute();
$articles = $articleSelect->fetchAll(); // Insere le resultat de la requete dans $articles
*/

$request = $pdo->query("SELECT * FROM article");
$articles = $request->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC permet d'afficher les valeurs avec le nom des champs sans les clés numériques
// SANS FETCH_ASSOC => ['title' => 'Titre', 0 => 'Titre']
// SANS FETCH_ASSOC => ['title' => 'Titre']
// Pour utiliser FETCH_ASSOC pour toutes les requetes
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


var_dump($articles);

