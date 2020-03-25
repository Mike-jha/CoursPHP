<?php
/*
 * Complétez le script PHP suivant de manière à afficher un tableau HTML composé de $nbLignes lignes
 * et de $nbColonnes colonnes.
 * 
 * On affichera un indice dans chaque case, en commençant par 1.
 * 
 * [Facultatif] Une case sur deux sera grisée.
 * 
 * for (condition)
 * ...
 * endfor;
 */

$nbLignes = 4;
$nbColonnes = 12;
?>

<style>
    .color {
        background-color: lightgrey;
    }
</style>

<html lang="fr">
    <head>
        <title>Tableau Dynamique</title>
    </head>
    <body>
        <table>
            <tbody>
            <?php for ($l = 1; $l <= $nbLignes; ++$l) : ?>
                <tr>
                <?php for($c = 0; $c < $nbColonnes; ++$c): 
                    $index = $c + (($l - 1) * $nbColonnes);
                    // colonne courante + ((ligne courante - 1) * nombre de colonnes)    
                ?>
                    <td <?php if (0 == $index % 2) :?> class="color" <?php endif; ?> >
                        Item 1 <?php echo $index; ?>
                    </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </body>
</html>