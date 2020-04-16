<?php

/*
-Créer une table category (id, name)
- Ecrire la classe Entity/Category
- Ecrire la classe Manager\Category\CategoryManager avec les méthodes save et findAll
- Ajouter un fichier category_edit.php qui affiche le formulaire
- Afficher la liste dans category_list.php
*/

// ini_set('display_errors', '1');
spl_autoload_register();

use Manager\CategoryManager;

// var_dump(ArticleManager::class);

$categoryManager = new CategoryManager();
$category = $categoryManager->findAll();

var_dump($category);

require_once 'include/header.php';
?>
<div class="container">
    <h1>Gestion des catégories</h1>
    <a href="category_edit.php" class="btn btn-success mb-2">Ajouter une catégorie</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Catégorie</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($category as $cata) : ?>
                <tr>
                    <td><?= $cat->getName(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>

</html>