<?php
    include_once('fonction.php');  

    insertThe($_POST['nom'], $_POST['occupation'], $_POST['rendement']);
    echo json_encode(true);
?>