<?php

/**
 * Retourne toutes les destinations 
 */
function getAllDestination()
{
    global $pdo;

    $request = $pdo->query('SELECT * FROM destination ORDER BY name');

    return $request->fetchAll();
}
