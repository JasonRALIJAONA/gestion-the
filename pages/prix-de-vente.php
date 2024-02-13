<?php
  include_once('../inc/fonction.php');
  $liste=listThe();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prix de vente</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <script src="../js/gestionCueilleur.js"></script>

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
        <li><a href="#">Se déconnecter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row">
    <div class="col-lg-3" style="height: 950px;background-color:white;margin-top: -20px;">
        <center style="margin-top:50px;">
            <ul class="nav nav-pills nav-stacked"> 
              <h3 style="margin-bottom:20px;"><span class="glyphicon glyphicon-list"></span>   MENU</h3>  
                <li role="presentation"><a href="gestion-the.html">Gestion thé</a></li>
                <li role="presentation"><a href="gestion-parcelles.php">Gestion parcelles</a></li>
                <li role="presentation"><a href="gestion-cueilleurs.html">Gestion cueilleurs</a></li>
                <li role="presentation"><a href="gestion-depenses.php">Gestion dépenses</a></li>
                <li role="presentation"><a href="gestion-salaires.php">Gestion salaire</a></li>
                <li role="presentation"><a href="configuration-mois.html">Configuration mois</a></li>
                <li role="presentation"><a href="configuration-cueilleur.php">Configuration cueilleur</a></li>
                <li role="presentation" class="active"><a href="#">Prix de vente</a></li>
            </ul>
        </center>
    </div>
    <div class="col-lg-9" style="height: 950px;margin-top: -20px;">
    <div style="height:150px;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;color:white;padding-top:20px;"><center><h1>Prix de vente</h1></center></div>
      <center>
          <div class="row" style="margin-bottom: 20px;margin-top:20px;width:500px ;padding-left: 40px;height: 300px;border-radius: 10px;background-color: white;box-shadow:0 5px 10px rgba(0, 0, 0, 0.05);padding-right: 30px;">
              <h2>Configuration prix de vente</h2>
              <form class="form-horizontal" action="../traitements/insert-prix-vente.php" method="post" style="margin-top: 50px; " id="formulaire">
                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Variété</label>
                    <div class="col-sm-10 col-lg-4">
                        <select name="variete" id="" class="form-control">
                            <?php for ($i=0; $i <count($liste) ; $i++) { ?>
                              <option value="<?php echo($liste[$i]['idThe']) ?>"><?php echo($liste[$i]['nom']); ?></option>
                           <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Prix de vente</label>
                    <div class="col-sm-10 col-lg-4">
                    <input id="" type="number" name="prixVente" placeholder="Prix de vente" class="form-control">
                    </div>
                </div>
                <?php
                  if (isset($_GET['reponse'])) {
                  ?>
                    <p style="color: green;">Insertion reussie</p>
                  <?php
                  }
                ?>
               <div class="form-group"> 
                    <button class="btn btn-primary">Valider</button>
                </div>
                </div>
      </center>
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