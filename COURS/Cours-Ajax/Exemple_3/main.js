let refreshButton = document.getElementById("#load");
let lastNews = document.getElementById("#lastNews");
let xhttp = XMLHttpRequest;

refreshButton.onclick = function() {
  xhttp.open("GET", "lastNews.php");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      // Transforme la chaine contenant le JSON
      let jsonData = JSON.parse(this.responseText);
      console.log(jsonData);

      jsonData.forEach(function(article) {
        console.log(article);
        let articleDiv = document.createElement("div");
        articleDiv.innerHTML = "<h2>" + article.title + "</h2>";
        lastNews.appendChild(articleDiv);
      });
    }
  };

  xhttp.send();
};

/*
    
*/
