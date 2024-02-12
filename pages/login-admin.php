<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body style="background-color:#e7e7e7;background: url(../assets/img/fondLogin.jpg);background-repeat: no-repeat;background-size">  
        <div class="container">
                <div class="row">
                        <center>
                            <h1 style="font-family: 'Bauhaus 93';margin-top:50px;" >DI-T</h1>
                            <div class="row" style="margin-top: 100px;width:500px ;padding-left: 40px;height: 350px;border-radius: 10px;background-color: white;box-shadow:0 5px 10px rgba(0, 0, 0, 0.05);padding-right: 30px;">
                                <h1>LOGIN(Admin)</h1>
                                <form class="form-horizontal" action="../traitements/traite-login-admin.php" method="post" style="margin-top: 50px; ">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-4">E-Mail</label>
                                        <div class="col-sm-10 col-lg-6">
                                        <input type="text" name="email" placeholder="E-Mail" class="form-control" value="admin@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-4">Mot de passe</label>
                                        <div class="col-sm-10 col-lg-4">
                                        <input type="password" name="mdp" placeholder="Mot de passe" class="form-control" value="admin01">
                                        </div>
                                    </div>
                                    <?php
                                      if (isset($_GET['error'])) {?>
                                        <p style="color:red"><?php echo($_GET['error']); ?></p>
                                      <?php } ?>
                                    <p style="
                                        margin-top: 20px;"><a href="login-user.php">Se connecter en tant qu'utilisateur?</a></p>
                                    <div class="form-group">
                                        <button style="
                                        margin-top: 20px;" type="submit" class="btn btn-primary">Se connecter</button>
                                    </div>
                                    </form>
                                    
                                </div>
                    </center>
            </div>
        </div>
    <div class="footer" style="background-color:white;height:200px;margin-top: 250px;">
        <center style="margin-top: 0px;"><div >Copyright © Your Website 2024</div></center>
        <div class="col-lg-4"><h1>Rakotoarimanana Nathan | ETU002485</h1></div>
        <div class="col-lg-4"><h1>Ralijaona Andriniaina Jason | ETU002529</h1></div>
        <div class="col-lg-4"><h1>Andriambelomisandratra Onitsoa Elisa | ETU002382</h1></div>
        
    </div>       
</body>
</html>