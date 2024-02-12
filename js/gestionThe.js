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
          var formData = new FormData(form);
      
        //  Définissez ce qui se passe si la soumission s'est opérée avec succès
        //   xhr.addEventListener("load", function(event) {
        //     $msg=(event.target.responseText!="")?"Achat effectue ":"OK";
        //     alert($msg);
        //   });
      
        //   // Definissez ce qui se passe en cas d'erreur
        //   xhr.addEventListener("error", function(event) {
        //     alert('Oups! Quelque chose s\'est mal passé.');
        //   });
      
          xhr.onreadystatechange  = function() 
          { 
             if(xhr.readyState  == 4){
              if(xhr.status  == 200) {
                  var retour = JSON.parse(xhr.responseText);
                  console.log(retour);
                  displayThe()
              } else {
                  document.dyn="Error code " + xhr.status;
              }
              }
      
          }; 

          // Configurez la requête
          xhr.open("POST", "../traitements/insertion-the.php");
      
          // Les données envoyées sont ce que l'utilisateur a mis dans le formulaire
          xhr.send(formData);
        }
      
        // Accédez à l'élément form …
        var form = document.getElementById("formulaire");
      
        // … et prenez en charge l'événement submit.
        form.addEventListener("submit", function (event) {
          event.preventDefault(); // évite de faire le submit par défaut
      
          sendData();
        });
      });
      
}

function displayTheTab(tab) {
    var tableau=document.createElement("table");
    //tableau.setAttribute("border","1");
    tableau.className="table";

    // l'en tete du taleau
    var thead=document.createElement("thead");
    var ligneTete=document.createElement("tr");

    var th=document.createElement("th");
    var text=document.createTextNode("#");

    var th1=document.createElement("th");
    var text=document.createTextNode("nom");
    th1.appendChild(text);

    var th2=document.createElement("th");
    text=document.createTextNode("occupation");
    th2.appendChild(text);

    var th3=document.createElement("th");
    text=document.createTextNode("rendement");
    th3.appendChild(text);

    ligneTete.appendChild(th);
    ligneTete.appendChild(th1);
    ligneTete.appendChild(th2);
    ligneTete.appendChild(th3);

    thead.appendChild(ligneTete)
    tableau.appendChild(thead);

    // le corps du tableau
    tbody=document.createElement("tbody");

    tab.forEach(element => {
        var trTemporaire=document.createElement("tr");
    
        var td1=document.createElement("td");
        td1.innerHTML=element['idThe'];
    
        var td2=document.createElement("td");
        td2.innerHTML=element['nom'];
    
        var td3=document.createElement("td");
        td3.innerHTML=element['occupation'];

        var td4=document.createElement("td");
        td4.innerHTML=element['rendement'];

        var td6=document.createElement("button");
        td6.className="btn btn-primary";
        td6.innerHTML="<span class='glyphicon glyphicon-trash'></span>";
        td6.style="background-color:red";

        td6.onclick=() =>{
          removeRow(td6);
        }

        var td7=document.createElement("button");
        td7.className="btn btn-primary";
        td7.innerHTML="<span class='glyphicon glyphicon-edit'></span>";
       
        td7.onclick= () =>{
          changeFormValue(td7);
        }
        
        trTemporaire.appendChild(td1);
        trTemporaire.appendChild(td2);
        trTemporaire.appendChild(td3);
        trTemporaire.appendChild(td4);
        trTemporaire.appendChild(td6);
        trTemporaire.appendChild(td7);

        tbody.appendChild(trTemporaire);

        
    });
    tableau.appendChild(tbody);

    var resultat=document.getElementById("resultat");
    if (resultat.hasChildNodes()) {
        while (resultat.firstChild) {
          resultat.removeChild(resultat.firstChild);
        }  
    }

    resultat.appendChild(tableau);
}

function displayThe()
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

            displayAchatByTab(retour);
        } else {
            document.dyn="Error code " + xhr.status;
        }
		}

    }; 
  //XMLHttpRequest.open(method, url, async)
   xhr.open("GET", "../traitement/liste-the.php",  true); 
   
   //XMLHttpRequest.send(body)
   xhr.send(null); 
}

function removeRow(button) {
    var tr=button.parentNode;
    var idAchat=tr.firstChild.innerText;
    idThe=parseInt(idThe);
  
  
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
            displayThe();
        } else {
            document.dyn="Error code " + xhr.status;
        }
    }
  
    };
    
  
  //XMLHttpRequest.open(method, url, async)
   xhr.open("GET", "../traitement/supprimer-the.php?idThe="+idAchat,  true); 
   
   //XMLHttpRequest.send(body)
   xhr.send(); 
  }

  function modifier() {
    var boutModif=document.getElementById("modifieur");
    boutModif.style.display="none";
  
    // Accédez à l'élément form …
    var form = document.getElementById("formulaire");
  
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
      var formData = new FormData(form);
  
    //  Définissez ce qui se passe si la soumission s'est opérée avec succès
      xhr.addEventListener("load", function(event) {
        $msg=(event.target.responseText!="")?"Modification effectue ":"OK";
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
              displayThe();
          } else {
              document.dyn="Error code " + xhr.status;
          }
          }
  
      }; 
  
      // Configurez la requête
      xhr.open("POST", "../traitement/modifier-the.php");
  
      // Les données envoyées sont ce que l'utilisateur a mis dans le formulaire
      xhr.send(formData);
  
  }

  function changeFormValue(button) {
    var tr=button.parentNode;
    var cellules=tr.cells;
  
    var idThe=cellules[0].innerText;
    var nomThe=cellules[1].innerText;
    var occupationThe=cellules[2].innerText;
   
  
    var hiddenIdAchat=document.getElementById("idAchat");
    console.log(hiddenIdAchat);
    console.log(idAchat);
    hiddenIdAchat.value=idAchat;
  
    var selection=document.getElementById("selection");
    selection.value=produit;
  
    var pu=document.getElementById("prixU");
    pu.value=prixUnitaire;
  
    var qtt=document.getElementById("quantite");
    qtt.value=quantite;
  
    var modifieur=document.getElementById("modifieur");
    modifieur.style.display="block";
  
  }