<?php 

/*
    Ecrire une fonction "getPDO" qui va créer un objet PDO avec les bons parametres
    - UTF8
    - setAttribute FETCH_ASSOC
*/

/**
 * Retourne un object PDO 
*/

function getPDO() {
    $dsn = 'mysql:host=localhost;dbname=wf3_test';
    $pdo = new PDO($dsn, 'root', 'root');
    $pdo->exec('SET CHARACTER SET utf8');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
}

/*
    Ecrire une fonction avec l'objet PDO en parametre qui retourne tout les articles
*/

/**
 * Retourne tous les articles
 * 
 * @param $pdo Objet PDO
 * @return array Tableau avec les articles 
*/

function getArticles($pdo){
    $req = $pdo->query("SELECT * FROM article");
    
    return $req->fetchALL();
}

/*
Ecrire une fonction getArticle($id) qui retournera une seul article a partir de l'id
- la fonction $request->fetch() va retourner un seul resultat
- utiliser la fonction prepare et bindValue pour définir l'id que la requete doit rechercher
*/

function getArticle($pdo, $id) {
    $prep= $pdo->prepare("INSERT INTO article (title, date_create,content)
value(?,?,?)");
    $prep->bindValue(1,$title);
    $prep->bindValue(2,$date);
    $prep->bindValue(3,$content);
}