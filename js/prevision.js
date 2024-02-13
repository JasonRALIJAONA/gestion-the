function connexion() {
    window.addEventListener("load", function () {
        function sendData() {
          var xhr; 
          try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
          catch (e) 
          {
              try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
              catch (e2) 
              {
                 try {  xhr = new XMLHttpRequest();  }
                 catch (e3) {  xhr = false;   }
               }
              }
              
              // Liez l'objet FormData et l'élément form
              var form = document.getElementById("formulaire");
              var formData = new FormData(form);
              // Accédez à l'élément form …

            //  Définissez ce qui se passe si la soumission s'est opérée avec succès
        //     xhr.addEventListener("load", function(event) {
        //     $msg=(event.target.responseText!="")?"Cueillette effectue ":"OK";
        //     alert($msg);
        //     });
      
        //   // Definissez ce qui se passe en cas d'erreur
        //     xhr.addEventListener("error", function(event) {
        //     alert('Oups! Quelque chose s\'est mal passé.');
        //     });
      
          xhr.onreadystatechange  = function() 
          { 
             if(xhr.readyState  == 4){
              if(xhr.status  == 200) {
                var retour = JSON.parse(xhr.responseText);
                displayPrevision(retour);
              } else {
                  document.dyn="Error code " + xhr.status;
              }
              }
      
          }; 

          // Configurez la requête
          xhr.open("POST", "../traitements/get-liste-parcelle.php");
      
          // Les données envoyées sont ce que l'utilisateur a mis dans le formulaire
          xhr.send(formData);
        }
      
        // console.log(form);
        var form = document.getElementById("formulaire");
    
      
        // … et prenez en charge l'événement submit.
        form.addEventListener("submit", function (event) {
        event.preventDefault(); // évite de faire le submit par défaut
      
          sendData();
        });
      });
      
}

function displayPrevision(tab) {
    var resultat=document.getElementsByTagName("row")[0];
    if (resultat.hasChildNodes()) {
        while (resultat.firstChild) {
          resultat.removeChild(resultat.firstChild);
        }  
    }

    tab.forEach(element => {
        var tempDiv=document.createElement("div");
        tempDiv.class="col-sm-6 col-md-4";

        var thumbnail=document.createElement("div");
        thumbnail.className="thumbnail parcelles";
        thumbnail.style="padding-left: 20px;padding-right: 20px";

        var nomParcelle=document.createElement("p");
        nomParcelle.innerHTML=element['numero'];

        thumbnail.appendChild(nomParcelle);

        var centre=document.createElement("center");
        var h3=document.createElement("h3");

        centre.appendChild(h3);

        thumbnail.appendChild(centre);

        var surface=document.createElement("p");
        surface.innerHTML=element['surface'];

        thumbnail.appendChild(surface);

        var image=document.createElement("img");
        image.source="../assets/img/the.jpg";

        thumbnail.appendChild(image);

        var caption=document.createElement("div");
        caption.className="caption";

        var pieds=document.createElement("p");
        pieds.innerHTML="Nombre de pieds : "+element['nbPied'];

        var restant=document.createElement("p");
        restant.innerHTML="Poids The restant : "+element['poids'];

        caption.appendChild(pieds);
        caption.appendChild(restant);

        thumbnail.appendChild(caption);

        tempDiv.appendChild(thumbnail);
        resultat.appendChild(tempDiv)
    });

}