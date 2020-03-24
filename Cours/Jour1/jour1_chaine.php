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

$messageMajuscule = strtoupper($message); // Met la phrase en majuscule
$messageMinuscule = strtolower($message); // Met la phrase en minuscule
$messageMajusculeMot = ucwords($message); // Met chaque premiere lettre des mots en majuscule
$messageMajPremiereLettre = ucfirst($message); // Met la premiere lettre en majuscule

$position = strpos($message, 'journée'); // Retourne la position de la sous chaine journée
// Retourne false si la sous chaine n'est pas trouvée
// if (strpos($message,'journée')) {}

$msgThe = str_replace('café', 'thé', $message2); // Retourne une chaine en remplacant 'café' par 'thé' dans la chaine
echo $msgThe;

$html = '<a href="#">Clique sur mon super lien</a>';
echo '<br/>';
echo $html;

$html2 = '<scricpt>alert("ahah");</script>'; // ATTENTION faille XSS

echo strip_tags($html2); // Supprimer les balises html
// echo strip_tags($chaine, '<a><p>'); // supprime tout sauf les balises a et p
echo '<br/>';
echo htmlentities($html2); // Transforme les balises html en caractères spéciaux (affiche l'html en tant que texte)

$arrayOfString = explode($message, ','); // Découpe une chaine de caractère en fonction d'un séparateur (ici ','), retourne un tableau avec chaque partie
var_dump($motsClesArray);

trim($chaine); // retourne la chaine sans les espaces au début et à la fin

$nouveauxMots = implode(',', $motsClesArray); 

$avecSlashes = addslashes($message); // Ajoute de '\'
echo $avecSlashes;

stripslashes($message); //Retire les slashes
?>
