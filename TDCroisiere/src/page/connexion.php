<?php

$title = "S'inscrire";

$errors = []; // Erreurs pour le formulaire
$username = '';
$password = '';

// Test si le formulaire est envoyé
if (!empty($_POST)) {
    $_POST = array_map('trim', $_POST);
    $_POST = array_map('strip_tags', $_POST); // retire les balises html

    // Stock les valeurs POST pour les afficher dans les "value" des champs
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($errors)) { // S'il n'y a pas d'erreur
        $result = login($username, $password);

        if ('success' == $result['type']) {
            // Génére un message qui sera affiché après la redirection
            addFlashMessage('success', $result['message']);

            header('Location: index.php');
            exit(); // Arrête le script
        }

        $errors['global'] = $result['message'];
    }
}

ob_start();
?>
<h1>Se connecter</h1>
<!-- div.card.form-frame>div.card-body>(div.form-group>input:text[name="username"])+(div.form-group>input:email[name="email"])+(div.form-group>input:password[name="password"])+button:submit.btn.btn-primary.btn-block -->
<div class="card form-frame">
    <div class="card-body">

        <?php if (isset($errors['global'])) : ?>
            <div class="alert alert-danger"><?= $errors['global']; ?></div>
        <?php endif; ?>

        <div class="alert alert-danger" id="ajax-error" style="display: none;"></div>

        <form action="" method="post" novalidate>
            <div class="form-group">
                <input class="form-control" placeholder="Nom d'utilisateur" type="text" name="username" value="<?= $username; ?>">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Mot de passe" type="password" name="password" value="<?= $password; ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();

require_once '../template.php';
