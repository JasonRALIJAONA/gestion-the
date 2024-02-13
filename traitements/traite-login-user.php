<?php
    include_once('../inc/fonction.php');

    $email=$_POST['email'];
    $mdp=$_POST['mdp'];

    $resultat=loginUtilisateur($email,$mdp);

    if ($resultat == -1) {
        header('Location:../pages/login-temp-user.php?error=Email ou mot de passe invalide');    
    }else{
        header('Location:../pages/saisie-ceuilletes.html');
    }
    
?>