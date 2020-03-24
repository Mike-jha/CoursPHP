<?php
if (!empty($_POST)) {
  $text = trim($_POST['exo']);
} else {
  echo 'Veuillez écrire dans le champ svp!';
}
  //Quelques exercices pratiques sur les chaines de caractères :

  //1. Créez un formulaire HTML comportant un champ de texte, dans un script PHP. Le formulaire pointera sur la même page.

  //2. Créez un bouton `submit` qui envoie la chaine entrée, et qui affiche dans un <div> cette chaine en majuscules.
if (isset($_POST['envoi_majuscule'])) {
  echo 'Ligne de texte en majuscule envoyé: <br/>';
  $textMajuscule = strtoupper($text);
  echo $textMajuscule;
}
  //3. Créez un deuxième bouton `submit`, qui permet d'afficher la chaine entrée en minuscules
if (isset($_POST['envoi_minuscule'])) {
  echo 'Ligne de texte en minuscule envoyé: <br/>';
  $textMinuscule = strtolower($text);
  echo $textMinuscule;
}
  //4. De meme, un submit pour ajouter une majuscule à chaque mot
if (isset($_POST['envoi_maj_mot'])) {
  echo 'Ligne de texte avec des majuscules à chaque mot envoyé: <br/>';
  $textMajMot = ucwords($text);
  echo $textMajMot;
}
  //5. Et encore un submit pour ajouter une majuscule, mais seulement au début de la chaine.
if (isset($_POST['envoi_lettrine'])) {
  echo 'Ligne de texte avec des lettrines envoyé: <br/>';
  $textLettrine = ucfirst($text);
  echo $textLettrine;
}
  //6. Créez maintenant un submit qui n'affichera la chaine que jusqu'au caractère '.' (point) non inclus
  //- Utilisez pour cela la fonction `explode`.
if (isset($_POST['envoi_explode'])) {
  echo 'Ligne de texte explosé envoyé: <br/>';
  $textExplode = explode($text, '.');
  echo $textExplode;
}
  //- Utilisez maintenant la fonction `strpos` et `substr` pour produire le même résultat.

if (isset($_POST['envoi_explode'])) {
  echo 'Ligne de texte envoyé: <br/>';
  $textPosition = strpos($text, 'Motrandom');
  echo $textPosition;
  echo substr($text, 10, 20);
}

  //Bonus : Créez pour finir un submit qui affiche les deux premiers mots de la chaine entrée, séparés par un tiret ("-")
  //S'il n'y a pas assez de mots, affichez le message "Entrez au moins deux mots"
 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Exercice Formulaire 1</title>
 </head>
 <body>
    <form action="" method="post" novalidate>
        <div><label for="exo">Entrez votre texte</label><input type="text" name="exo" id="exo"></div>
        <button type="submit" name="envoi_majuscule">Envoyer en majuscule</button>
        <button type="submit" name="envoi_minuscule">Envoyer en minuscule</button>
        <button type="submit" name="envoi_maj_mot">Envoyer en maj-mot</button>
        <button type="submit" name="envoi_lettrine">Envoyer en lettrine</button>
        <button type="submit" name="envoi_explode">Envoyer explosé</button>
    </form>
 </body>
 </html>