<?php
    /*
        1. Dans le fichier `function.php`, créez une nouvelle fonction :
        `getListMenu` qui renverra une liste ul > li, dont chacun des éléments
        sera contenu dans un tableau passé en paramètre.

        On appelera cette fonction ainsi :

        $myMenuArray = ['Homepage', 'Archives', 'Plan du site'];
        $myMenu = getListMenu($myMenuArray);
        echo $myMenu;

        2. Modifiez cette fonction pour qu'elle puisse également prendre
        en compte l'url de chacune de ces pages :
            - On modifiera le tableau passé en paramètre
            - Les éléments de liste <li> contiendront un <a> dirigeant
                vers chacune des pages
     */
    $items = [
        'Accueil' => '/accueil.php',
        'Contact' => '/contact.php',
        'Portfolio' => '/portfolio.php',
    ];

    function getListMenu($items) {
        foreach ($items as $key => $link) {
            if ('/accueil.php' == $link) {
                continue; 
            }
            
            echo '<li><a href="'.$link.'">'.$key.'</a></li>';
        
            if ('Portfolio' == $key) {
                break;
            }
        }
    }

    
?>
<nav>
    <ul>
    <?php echo getListMenu($items); ?>
    </ul>
</nav>