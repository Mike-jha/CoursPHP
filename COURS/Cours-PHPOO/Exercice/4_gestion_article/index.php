<?php

// ini_set('display_errors', '1');
spl_autoload_register();

use Manager\ArticleManager;

// var_dump(ArticleManager::class);

$articleManager = new ArticleManager();
$articles = $articleManager->findAll();

var_dump($articles);

require_once 'include/header.php';
?>
<div class="container">
    <h1>Gestion des articles</h1>
    <a href="article_edit.php" class="btn btn-success mb-2">Ajouter un article</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Titre</th>
                <th>Catégorie</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($articles as $a) : ?>
                <tr>
                    <td><?= $a->getTitle(); ?></td>
                    <td><?= $a->getCategory(); ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>

</html>