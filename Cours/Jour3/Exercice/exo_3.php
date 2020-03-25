<?php
	/*
		1. Créez un fichier functions.php que vous incluerez dans un script PHP.

		2. Dans ce fichier, créez une fonction `getAccountButton`.
			Cette fonction affichera un élément HTML contenant :
				- Le nom de l'utilisateur passé en paramètre
				- Une image dont le chemin sera passé en paramètre

		3. Créez une page web simple et appelez la fonction dans un <header>

		4. Modifiez la fonction pour que l'élément ne soit plus écrit,
		mais soit renvoyé en tant que chaine de caractère.

	 */

require_once 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <header><?php getAccountButton('Mike', 'https://picsum.photos/200'); ?></header>
</body>
</html>
