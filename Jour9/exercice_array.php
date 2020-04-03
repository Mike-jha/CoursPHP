<?php

/*
 - Afficher le prix du troisième produit
 - Afficher le nom du premier produit
 - Afficher le nombre de tags du deuxième produit
 - Créer un tableau html qui affiche tous les nom et prix des produits
 - Ajouter une colonne qui affiche chaques tags dans une balise span
 
*/
$products = [
    [
        'name' => "Animal Crossing New Horizon",
        'price' => 44.99,
        'tags' => ['Jeux vidéo'],
    ],
    [
        'name' => "Joker",
        'price' => 24.90,
        'tags' => ['Blu-Ray', 'Joaquin Phoenix', 'Robert De Niro'],
    ],
    [
        'name' => "La Vie secrète des écrivains",
        'price' => 8.40,
        'tags' => ['Livre', 'Musso'],
    ],
];

// Afficher le prix du 3eme produit
echo $products[2]['price'];

echo '</br>';
//  Afficher le nom du 1er produit
echo $products[0]['name'];

echo '</br>';
// Afficher le nombre de tags du 2eme élément
echo count($products[1]['tags']);

echo '</br>';
$productsTag = $products['tags'];
echo $productsTag;
?>
<!-- Créer un tableau html qui affiche tous les nom et prix des produits -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody>
            <!-- Liste des articles -->
            <?php foreach ($products as $prod) : ?>
                <tr>
                    <td>
                        <?= $prod['name']; ?>
                    </td>
                    <td>
                        <?= $prod['price']; ?>
                    </td>
                    <td>
                        <?php foreach ($prod['tags'] as $prodTags) : ?>
                            <span><?= $prodTags . ' ,'; ?> </span>
                        <?php endforeach; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>