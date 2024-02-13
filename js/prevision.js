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
            xhr.addEventListener("load", function(event) {
            $msg=(event.target.responseText!="")?"Cueillette effectue ":"OK";
            alert($msg);
            });
      
          // Definissez ce qui se passe en cas d'erreur
            xhr.addEventListener("error", function(event) {
            alert('Oups! Quelque chose s\'est mal passé.');
            });
      
          xhr.onreadystatechange  = function() 
          { 
             if(xhr.readyState  == 4){
              if(xhr.status  == 200) {
                var retour = JSON.parse(xhr.responseText);
                console.log(retour);
              } else {
                  document.dyn="Error code " + xhr.status;
              }
              }
      
          }; 

          // Configurez la requête
          xhr.open("POST", "../traitements/traite-cueillete.php");
      
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