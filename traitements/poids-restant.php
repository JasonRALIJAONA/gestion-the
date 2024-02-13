<?php
    include_once('../inc/fonction.php');  

    $poids = getPoidsActu($_GET['date'], $_GET['idParcelle']);
    if ($poids) {
        echo json_encode($poids);
    }
?>