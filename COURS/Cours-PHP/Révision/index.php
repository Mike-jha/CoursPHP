<?php

ini_set('display_errors', 1);
/*
- Créer une table 'car' dans la db avec les champs suivants: id, model, brand, description (DEFAULT NULL)
- Créer un fichier add_car.php qui affiche un formulaire d'ajout ainsi que le traitement du formulaire, vérifier les données
- model et marque doivent être plus grand que 5 caractères
- Afficher la liste des voitures dans index
- Créer un fichier edit_car.php qui permet d'éditer une voiture
*/
require_once 'database.php';

$cars = getAllCars();

include 'head.php';
?>
<h1>Liste des véhicules</h1>
<a href="add_car.php" class="btn btn-success">Ajouter un véhicule</a>
<hr />
<!-- table.table>(thead>tr>th*3)+tbody -->
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Marque (brand)</th>
            <th>Modèle du véhicule (model)</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($cars as $car) : ?>
        <tr>
            <td><?= $car['brand']; ?></td>
            <td><?= $car['model']; ?></td>
            <td><?= substr($car['description'], 0, 20); ?></td>

            <td>
                <a class="btn btn-secondary" href="edit_car.php?id=<?= $car['id']; ?>">
                    Modifier
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>