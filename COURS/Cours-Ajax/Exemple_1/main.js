let refreshButton = document.getElementById("load");
let lastNews = document.getElementById("lastNews");

// Récupération de l'objet js pour faire des appels Ajax
let xhttp = new XMLHttpRequest();
// Lors d'un clique sur le bouton
// refreshButton.onclick = function() {};
refreshButton.onclick = () => {
  // Prépare la requete Ajax
  xhttp.open("GET", "lastNews.php");

  // Fonction qui sera appelée lors d'un changement d'état de la requete
  xhttp.onreadystatechange = function() {
    console.log(this.readyState);
    // Test si le serveur a fini d'éecuter la requete ET s'il n'y a pas d'erreurs (status 200)
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      lastNews.innerHTML = this.responseText;
    }
  };

  // Envoie la requete au serveur
  xhttp.send();
};
