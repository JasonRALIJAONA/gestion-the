<?php
    include_once('../inc/fonction.php');  

    insertCueillette($_POST['date'], $_POST['ceuilleur'], $_POST['parcelles'], $_POST['poids']);
    echo json_encode(true);
?>