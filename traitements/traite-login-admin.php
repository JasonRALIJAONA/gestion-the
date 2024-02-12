<?php
    include_once('../inc/fonction.php');

    $email=$_POST['email'];
    $mdp=$_POST['mdp'];

    $resultat=loginAdmin($email,$mdp);

    if ($resultat == -1) {
        header('Location:../pages/login-admin.php?error=Email ou mot de passe invalide');    
    }
    
    header('Location:../pages/index.html');
?>