<?php

// Appel du fichier database.php
require_once('database.php');

$pdo = getPDO();

$articles = getArticles($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Liste des articles</title>
</head>
<body>
    <div class="container">
        <h1>Liste des articles</h1>
        <!-- table.table>((thread>tr>th*3)+(tbody)) -->
        <table class="table">
            <thread class="thead-dark">
                <tr>
                    <th>Titre</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thread>

            <tbody>
                <!-- Liste des articles -->
                <?php foreach($articles as $art): ?>
                    <tr>
                      
                        <td><?= $art['title']; ?></td>
                        <td><?= date_format(date_create($art['date_crate']),'d/m/Y'); ?></td>
                        <td><?= $art['content']; ?></td> 
                       
                    </tr>
                <?php endforeach; ?>

                    
                
            </tbody>
        </table>
    
    </div>
</body>
</html>