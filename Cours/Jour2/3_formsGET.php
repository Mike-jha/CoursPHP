<?php
// Variables superglobales sont des variables internes toujours disponibles
// quand on envoie un formulaire en method="GET les valeurs seront stockées dans la superglobales $_GET
// var_dump($_GET);
if (empty($_GET['username'])) {
    echo "Le nom d'utilisateur ne doit pas être vide";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire avec PHP</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="name">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>