<?php

require_once 'database.php';

$pdo = getPDO();

if (!empty($_POST)) {
    $_POST['content'] = trim(strip_tags($_POST['content'], '<a>'));

    if (strlen($_POST['content']) < 10) {
        $error = 'Le contenu est trop court';
    } else {
        $result = addTask($_POST['content']);

        if ($result) {
            header('Location: index.php');
            exit();
        }

        $error = 'Une erreur est survenue';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Ajouter des tâches</title>
</head>

<body>
    <div class="container">
        <h1>Ajout de tâches</h1>

        <form action="" method="post">
            <div class="form-group">
                <label for="content">New Task</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>