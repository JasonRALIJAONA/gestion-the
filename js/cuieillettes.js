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

function creeSelectCueilleurByTab(tab) {
    var selection=document.getElementById("selection-cueilleurs");
  
    if (selection.hasChildNodes()) {
      while (selection.firstChild) {
        selection.removeChild(selection.firstChild);
      } 
      
    }
  
    tab.forEach(element => {
      var option=document.createElement("option");
      option.value=element['idCueilleur'];
      option.innerHTML=element['nom'];
  
      selection.appendChild(option);
    });
  
}

function creeSelectParcelleByTab(tab) {
    var selection=document.getElementById("selection-parcelle");
  
    if (selection.hasChildNodes()) {
      while (selection.firstChild) {
        selection.removeChild(selection.firstChild);
      } 
      
    }
    
    var option0=document.createElement("option");
    option0.innerHTML='Choisir une parcelle';
  
    selection.appendChild(option0);
    tab.forEach(element => {
      var option=document.createElement("option");
      option.value=element['numero'];
      option.innerHTML=element['numero'];
  
      selection.appendChild(option);
    });
  
}

function creeSelectCueilleur()
{ 
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
  
    xhr.onreadystatechange  = function() 
    { 
       if(xhr.readyState  == 4){
        if(xhr.status  == 200) {
            var retour = JSON.parse(xhr.responseText);

            creeSelectCueilleurByTab(retour);
        } else {
            document.dyn="Error code " + xhr.status;
        }
		}

    }; 
  //XMLHttpRequest.open(method, url, async)
   xhr.open("GET", "../traitements/liste-cueilleur.php",  true); 
   
   //XMLHttpRequest.send(body)
   xhr.send(null); 
}

function creeSelectParcelle()
{ 
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
  
    xhr.onreadystatechange  = function() 
    { 
       if(xhr.readyState  == 4){
        if(xhr.status  == 200) {
            var retour = JSON.parse(xhr.responseText);

            creeSelectParcelleByTab(retour);
        } else {
            document.dyn="Error code " + xhr.status;
        }
		}

    }; 
  //XMLHttpRequest.open(method, url, async)
   xhr.open("GET", "../traitements/liste-parcelle.php",  true); 
   
   //XMLHttpRequest.send(body)
   xhr.send(null); 
}

function auto() {
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
  
    xhr.onreadystatechange  = function() 
    { 
       if(xhr.readyState  == 4){
        if(xhr.status  == 200) {
            var retour = JSON.parse(xhr.responseText);
            var suggestion=productName(retour);
            autoList(suggestion);
        } else {
            document.dyn="Error code " + xhr.status;
        }
    }
  
    };
    
  var idCategorie=document.getElementById("categorieId").value;
  //XMLHttpRequest.open(method, url, async)
   xhr.open("GET", "inc/listeProduitFiltre.php?idCat="+idCategorie,  true); 
   
   //XMLHttpRequest.send(body)
   xhr.send();  
}