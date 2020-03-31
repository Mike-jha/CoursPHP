<?php
/*
		Créer deux pages :

		`create-session.php`
			La page initialisera une variable de session 'viewed' à `true`;

		`get-viewed.php`
			La page affichera un message 'Vous avez visité la page
			create-session', si la variable 'viewed' est attribuée.

			Sinon, elle affichera le message 'Vous n'avez pas visité
			la page create-session'

	 */
session_start();

$_SESSION['viewed'] = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<a href="get-viewed.php">Session Viewed</a>
</body>

</html>