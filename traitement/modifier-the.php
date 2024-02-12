<?php
    include_once('../inc/fonction.php');  

    updateThe($_POST['idThe'], $_POST['nom'], $_POST['occupation'], $_POST['rendement']);
    echo json_encode(true);
?>