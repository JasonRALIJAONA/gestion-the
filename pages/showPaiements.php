<?php
  include_once('../inc/fonction.php');

  $debut=$_POST['dateDebut'];
  $fin=$_POST['fin'];
  $resultat=listPaiement($debut,$fin);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showPaiements</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/accueil.css" rel="stylesheet">

</head>
<body style="background-color:#e7e7e7;">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="font-family: 'Bauhaus 93';margin-left:10px;" class="navbar-brand" href="#">DI-T</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.html">Se déconnecter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" style="height: 800px;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;margin-top: -20px;color: white;">
            <center style="margin-top:50px;">
                <ul class="nav nav-pills nav-stacked">    
                <h3 style="margin-bottom:20px;"><span class="glyphicon glyphicon-list"></span>   MENU</h3>  
                    <li role="presentation"><a href="saisie-ceuilletes.html">Ceuilletes</a></li>
                    <li role="presentation"><a href="saisie-depenses.html">Dépenses</a></li>
                    <li role="presentation"><a href="formResult.html">Résultats</a></li>
                    <li role="presentation"  class="active1"><a href="formTraitement.php">Paiements</a></li>
                    <li role="presentation"><a href="formResult2.php">Montant & Bénéfice</a></li>
                </ul>
            </center>
        </div>
        <div class="col-lg-9" style="height: 800px;margin-top: -20px;">
        <div style="height:150px;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;color:white;padding-top:20px;"><center><h1>DI-T</h1></center></div>
        <center>
            <h1>Paiements</h1>
            <table class="table table-hover">
                <thead>
                  <tr style="background-color: rgb(129, 243, 87);">
                    <th>Date debut</th>
                    <th>Date fin</th>
                    <th>Nom cueilleur</th>
                    <th>Poids</th>
                    <th>%Bonus</th>
                    <th>%Mallus</th>
                    <th>Montant paiement</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=0; $i <count($resultat) ; $i++) { ?> 
                    <tr style="background-color: rgb(129, 243, 87);">
                    <td><?php echo ($resultat[$i]['dateDebut']); ?></td>
                    <td><?php echo ($resultat[$i]['dateFin']); ?></td>
                    <td><?php echo ($resultat[$i]['nomCueilleur']); ?></td>
                    <td><?php echo ($resultat[$i]['poids']); ?></td>
                    <td><?php echo ($resultat[$i]['bonus']); ?></td>
                    <td><?php echo ($resultat[$i]['mallus']); ?></td>
                    <td><?php echo ($resultat[$i]['montantPaiement']); ?></td>
                  </tr>
                 <?php } ?>
                </tbody>
              </table>
        </center>
        </div>
    </div>
</div>
    <div class="footer" style="background-color:white;height:200px;">
        <center style="margin-top: 0px;"><div >Copyright © Your Website 2024</div></center>
        <div class="col-lg-4"><h1>Rakotoarimanana Nathan | ETU002485</h1></div>
        <div class="col-lg-4"><h1>Ralijaona Andriniaina Jason | ETU002529</h1></div>
        <div class="col-lg-4"><h1>Andriambelomisandratra Onitsoa Elisa | ETU002382</h1></div>
        
    </div>  

</body>
</html>