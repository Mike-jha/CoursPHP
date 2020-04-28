<?php

/*
    Créer un formulaire pour envoyer un ticket (signalement de bug) avec les champs suivants:
        - Nom et prénom
        - Description
        - Priorité (select: faible, normale ou haute)

    Créer une fichier "envoi_ticket.php" pour traiter les information du formulaire (simulation base de données)
    Tester avant de faire l'ajax

    Traiter ce formulaire en Ajax et afficher le message de retour
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Liste des articles</title>
</head>

<body>
    <div class="container">
        <h1>Envoyer un ticket</h1>
        <?php if (!empty($msg)) : ?>
            <div class="alert" id="ajax-msg"></div>
        <?php endif; ?>
        <form action="" method="post">

            <div class="form-group">
                <label for="name">Nom et Prénom</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="priority">Priorité</label>
                <select name="priority" id="priority" class="form-control">
                    <option value="low">Faible</option>
                    <option value="normal">Normal</option>
                    <option value="high">Haute</option>
                </select>
            </div>

            <button id="send" type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <div id="yourTicket">
    </div>

    <script src="main.js"></script>
</body>

</html>