<?php
  include_once '../inc/fonction.php';
  $listeDepenses = listDepense();
  $modif = isset($_GET['modif']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depenses</title>
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
        <li><a href="#">Se déconnecter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row">
    <div class="col-lg-3" style="height: 950px;background-color:white;margin-top: -20px;">
        <center style="margin-top:50px;">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation"><a href="gestion-the.html">Gestion thé</a></li>
                <li role="presentation"><a href="gestion-parcelles.php">Gestion parcelles</a></li>
                <li role="presentation"><a href="gestion-cueilleurs.html">Gestion cueilleurs</a></li>
                <li role="presentation" class="active"><a href="#">Gestion dépenses</a></li>
                <li role="presentation"><a href="gestion-salaires.php">Gestion salaire</a></li>
            </ul>
        </center>
    </div>
    <div class="col-lg-9" style="height: 950px;margin-top: -20px;">
    <div style="height:150px;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;background-size;color:white;padding-top:20px;"><center><h1>Gestion des dépenses</h1></center></div>
      <center>
          <div class="row" style="margin-bottom: 20px;margin-top:20px;width:500px ;padding-left: 40px;height: 300px;border-radius: 10px;background-color: white;box-shadow:0 5px 10px rgba(0, 0, 0, 0.05);padding-right: 30px;">
              <h2>Insertion dépenses</h2>
              <form class="form-horizontal" action="../traitements/insertion-depense.php" method="post" style="margin-top: 50px; ">
                  <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Dépense</label>
                    <div class="col-sm-10 col-lg-6">
                    <input id="" type="text" name="depense" placeholder="Dépense" class="form-control"
                    <?php if ($modif) {
                      echo "value=".getDepense($_GET['modif'])['description'];                
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
      <div style="height: 400px;overflow: scroll;">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
          <?php
              foreach ($listeDepenses as $item) {
                ?>
            <tr>
              <th scope="row"><?php echo $item['idDepense'];?></th>
              <td><?php echo $item['description'];?></td>
              <td><a href="../traitements/supprimer-depense.php?numero=<?php echo $item['idDepense'];?>"><button style="background-color:red" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></a>  <a href="../traitements/modifier-depense.php?numero=<?php echo $item['idDepense'];?>"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a></td>
            </tr>
            <?php
              }
              ?>
          </tbody>
        </table>
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