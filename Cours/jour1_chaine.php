<?php 

$object = ' une tasse de café';
$message = 'Je voudrais'.$object.' pour bien démarrer la journée.';

// anti slash pour mettre une apostrophe
$message2 = 'rien de tel qu\''.$object.' pour être en forme.';

// Double quotes
$message3 = "Rien de tel qu'".$object.' pour être en forme.';

// Inclure une variable dans une chaine à double quote
// ATTENTION: ne fonctionne pas avec des simple quotes
$message4 = "Rien de tel qu'$object pour être en forme.";

echo $message;
echo '<br/>';

// strlen($str) => Nombre de caractères
echo 'il y a '.strlen($message4).'caractères';
echo '<br/>';
echo substr($message3, 10, 20); // retourne une chaine a part

?>