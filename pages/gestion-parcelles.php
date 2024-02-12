<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelles</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/accueil.css">

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
    <div class="col-lg-3" style="height: 1000px;background-color:white;margin-top: -20px;">
        <center style="margin-top:50px;">
            <ul class="nav nav-pills nav-stacked">
                <p style="margin-bottom:20px;"><span class="glyphicon glyphicon-user"></span>  Rakotoarimanana Nathan</p>    
                <li role="presentation"><a href="gestion-the.php">Gestion thé</a></li>
                <li role="presentation" class="active"><a href="#">Gestion parcelles</a></li>
                <li role="presentation"><a href="gestion-cueilleurs.php">Gestion cueilleurs</a></li>
                <li role="presentation"><a href="gestion-depense.php">Gestion dépenses</a></li>
                <li role="presentation"><a href="gestion-salaire.php">Gestion salaire</a></li>
            </ul>
        </center>
    </div>
    <div class="col-lg-9" style="height: 1000px;margin-top: -20px;">
    <div style="height:150px;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;color:white;padding-top:20px;"><center><h1>Gestion des parcelles</h1></center></div>
      <center>
          <div class="row" style="margin-bottom: 20px;margin-top:20px;width:500px ;padding-left: 40px;height: 350px;border-radius: 10px;background-color: white;box-shadow:0 5px 10px rgba(0, 0, 0, 0.05);padding-right: 30px;">
              <h2>Insertion parcelles</h2>
              <form class="form-horizontal" action="" method="post" style="margin-top: 50px; ">
                  <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Numéro</label>
                    <div class="col-sm-10 col-lg-5">
                    <input type="number" name="num" placeholder="Numéro" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Surface</label>
                    <div class="col-sm-10 col-lg-5">
                    <input type="number" name="surface" placeholder="Surface(hectare)" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-4">Variété</label>
                    <div class="col-sm-10 col-lg-5">
                    <input type="text" name="variete" placeholder="Variété" class="form-control">
                    </div>
                  </div>
                  <p style="color:red">Veuillez réessayer</p>                  
                  <div class="form-group">
                      <button style="
                      margin-top: 20px;" type="submit" class="btn btn-primary">Valider</button>
                      <button style="
                      margin-top: 20px;" type="submit" class="btn btn-default">Modifier</button>
                  </div>
                </form>
              </div>
      </center>
      <center><div style="width: 80px;height: 5px;background: #337ab7;border-radius: 7px;margin-bottom: 50px;"></div></center>
      <div style="height: 400px;overflow: scroll;">
        <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail parcelles">
                <img src="../assets/img/fondLogin.jpg" alt="...">
                <div class="caption">
                    <center>
                        <h1>#1</h1>
                        <p>69 ha</p>
                        <p>Cannabis</p>
                        <p><a href="#" class="btn btn-primary" style="background-color: red;border-color: red;" role="button"><span class="glyphicon glyphicon-trash"></span></a> <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-edit"></span></a></p>
                    </center>      
                </div>
              </div>
            </div>
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