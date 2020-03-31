<?php

session_start();

if (isset($_SESSION['name']) && true === $_SESSION['viewed']) {

    echo 'Vous avez visité la page
    create-session';
} else {

    echo 'Vous n\'avez pas visité
    la page create-session';
}
