<?php
    include_once('../inc/fonction.php');  

    updateCueilleur($_POST['idCueilleur'], $_POST['nom'], $_POST['genre'], $_POST['dateNaissance']);
    echo json_encode(true);
?>