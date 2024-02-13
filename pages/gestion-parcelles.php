<?php
  include_once '../inc/fonction.php';
  $listeThe = listThe();
  $listeParcelle = listParcelle();
  $modif = isset($_GET['modif']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelles</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
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
<div class="row">
    <div class="col-lg-3" style="height: 1100px;background-color:white;margin-top: -20px;">
        <center style="margin-top:50px;">
            <ul class="nav nav-pills nav-stacked">  
            <h3 style="margin-bottom:20px;"><span class="glyphicon glyphicon-list"></span>   MENU</h3>  
                <li role="presentation"><a href="gestion-the.html">Gestion thé</a></li>
                <li role="presentation" class="active"><a href="#">Gestion parcelles</a></li>
                <li role="presentation"><a href="gestion-cueilleurs.html">Gestion cueilleurs</a></li>
                <li role="presentation"><a href="gestion-depenses.php">Gestion dépenses</a></li>
                <li role="presentation"><a href="gestion-salaires.php">Gestion salaire</a></li>
                <li role="presentation"><a href="configuration-mois.html">Configuration mois</a></li>
                <li role="presentation"><a href="configuration-cueilleur.php">Configuration cueilleur</a></li>
                <li role="presentation"><a href="prix-de-vente.php">Prix de vente</a></li>
            </ul>
        </center>
    </div>
    overflow
    <div class="col-lg-9" style="height: 1100px;margin-top: -20px;">
    <div style="height:150px;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;color:white;padding-top:20px;"><center><h1>Gestion des parcelles</h1></center></div>
      <center>
          <div class="row" style="margin-bottom: 20px;margin-top:20px;width:500px ;padding-left: 40px;height: 350px;border-radius: 10px;background-color: white;box-shadow:0 5px 10px rgba(0, 0, 0, 0.05);padding-right: 30px;">
              <h2>Insertion parcelles</h2>

              <form class="form-horizontal" action="../traitements/insertion-parcelles.php" method="post" style="margin-top: 50px; ">
                  <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Numéro</label>
                    <div class="col-sm-10 col-lg-5">
                    <input type="number" name="numero" placeholder="Numéro" class="form-control"
                    <?php if ($modif) {
                      echo "value=".$_GET['modif'];                
                    }
                    ?>>
                    </div>
                  </div>
                  
                  <?php if ($modif) {
                    ?>
                      <input type="hidden" name="taloha" value="<?php echo $_GET['modif'];?>">
                    <?php
                  }
                  ?>

                  <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Surface</label>
                    <div class="col-sm-10 col-lg-5">
                    <input type="number" name="surface" placeholder="Surface(hectare)" class="form-control"
                    <?php if ($modif) {
                      echo "value=".getParcelle($_GET['modif'])['surface'];                
                    }
                    ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Variété de thé</label>
                    <div class="col-sm-10 col-lg-5">
                    <select name="idThe" id="idThe" class="form-control">
                      <?php
                        foreach ($listeThe as $item) {
                          if ($modif && $item['idThe']==$_GET['modif']){
                            echo "<option value='".$item['idThe']."' selected>".$item['nom']."</option>";
                          }
                          else {
                            echo "<option value='".$item['idThe']."'>".$item['nom']."</option>";
                          }
                        }
                        ?>
                    </select>
                    </div>
                  </div>
                  <div class="form-group" style="
                      margin-top: 20px;">
                      <?php if ($modif)
                      {
                        echo "<button type='submit' class='btn btn-primary'>Modifier</button>";
                      }
                      else {
                        echo "<button type='submit' class='btn btn-primary'>Valider</button>";
                      }
                      ?>

                  </div>
                </form>
              </div>
      </center>
      <center><div style="width: 80px;height: 5px;background: #337ab7;border-radius: 7px;margin-bottom: 50px;"></div></center>
      <div style="height: 500px;overflow: scroll;">
        <div class="row">
              
                <?php
                        foreach ($listeParcelle as $item) {
                          ?>
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail parcelles">
                            <img src="../assets/img/the.jpg" alt="...">
                            <div class="caption">
                              <center>
                                  <h1>#<?php echo $item['numero'];?></h1>
                                  <p><?php echo $item['surface'];?></p>
                                  <p><?php echo getThe($item['idThe'])['nom'];?></p>
                                  <p><a href="../traitements/supprimer-parcelles.php?numero=<?php echo $item['numero'];?>" class="btn btn-primary" style="background-color: red;border-color: red;" role="button"><span class="glyphicon glyphicon-trash"></span></a> <a href="../traitements/modifier-parcelles.php?numero=<?php echo $item['numero'];?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-edit"></span></a></p>
                              </center>      
                          </div>
                        </div>
                      </div>  
                          <?php
                        }
                        ?>
          </div>
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