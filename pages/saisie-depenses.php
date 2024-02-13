<?php
    include_once("../inc/fonction.php");
    $liste=listDepense();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depenses</title>
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
        <li><a href="#">Se déconnecter</a></li>
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
                    <li role="presentation" class="active1"><a href="">Dépenses</a></li>
                    <li role="presentation"><a href="formResult.html">Résultats</a></li>
                </ul>
            </center>
        </div>
        <div class="col-lg-9" style="height: 800px;margin-top: -20px;">
        <div style="height:150px;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;color:white;padding-top:20px;"><center><h1>DI-T</h1></center></div>
        <center>
            <div class="row" style="margin-bottom: 20px;margin-top:50px;width:500px ;padding-left: 40px;height: 350px;border-radius: 10px;background-color: white;box-shadow:0 5px 10px rgba(0, 0, 0, 0.05);padding-right: 30px;">
                <h2>Dépenses</h2>
                <form class="form-horizontal" action="../traitements/traite-depense.php" method="post" style="margin-top: 50px; ">
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-4">Date</label>
                        <div class="col-sm-10 col-lg-4">
                        <input id="" type="date" name="date" placeholder="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-4">Dépenses</label>
                        <div class="col-sm-10 col-lg-4">
                            <select name="depense" class="form-control" id="">
                                <?php for ($i=0; $i <count($liste) ; $i++) { ?>
                                    <option value="<?php echo $liste[$i]['idDepense']; ?>"><?php echo $liste[$i]['description']; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-4">Montant</label>
                        <div class="col-sm-10 col-lg-4">
                        <input id="" type="number" name="montant" placeholder="montant" class="form-control">
                        </div>
                    </div>                 
                    <div class="form-group" style="
                        margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                    </form>
                    <?php if (isset($_GET['resultat'])) { ?>
                        <p style="color:blue;">Depense insere</p>
                    <?php } ?>
                </div>
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