<?php
// boucle affichant les 10 premiers nombres pairs
$i = 2;
while ($i <= 20) {
    echo $i.'<br/>' ;
    $i += 2;
}
echo '<br/>';

// afficher une boucle avec les 10 premiers jours d'avril avec les fonction date et mktime
for ($d = 1; $d <= 10; ++$d) {
    $date = mktime(0,0,0,4,$d,2020);
    echo date('d/m/Y', $date).'<br/>';
}
echo '<br/>';

// Afficher les éléments du tableau $jours avec une boucle for
$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
for ($i = 0; $i < count($jours); ++$i) {
    echo $jours[$i].'<br/>';
}
echo '<br/>';

// faire la meme chose avec un foreach 
foreach($jours as $day){
    echo $day.'<br/>';
}
echo '<br/>';

// Faire une recherche dans $jours (avec foreach), quand la recherche est trouvé on affiche 'TROUVE' et on termine la boucle
$recherche = 'Jeudi';
foreach ($jours as $day) {
    echo $day. ', ';

    if ($day == $recherche) {
        echo 'TROUVE !';
        break;
    }
}
echo '<br/>';

$articles = [
    [
        'title' => "Doom Eternal : Un lancement record pour la franchise d'après Bethesda",
        'date' => "2020-03-25",
        'public' => true,
    ],
    [
        'title' => "The Council : le premier épisode est disponible gratuitement sur PC, PS4 et Xbox One",
        'date' => "2020-03-25",
        'public' => false,
    ],
    [
        'title' => "Assassin's Creed Odyssey gratuit ce week-end : retrouvez notre soluce complète",
        'date' => "2020-03-20",
        'public' => true,
    ],
    [
        'title' => "Octopath Traveler célèbre ses deux millions de copies écoulées",
        'date' => "2020-03-19",
        'public' => true,
    ],
    [
        'title' => "Nintendo Direct Animal Crossing : Toutes les informations dévoilées sur New Horizons",
        'date' => "2020-02-20",
        'public' => false,
    ],
];



foreach ($articles as $art) {
    // afficher les titres
    // => echo $article['title'].'<br/>';
    // Explorer les tableaux qui sont dns le tableau
    foreach ($art as $key => $elem) {
        echo $key .' : '.$elem.'<br>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jours</title>
</head>
<body>
    <ul>
        <?php foreach($jours as $day):?>
        <li><?= $day; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>