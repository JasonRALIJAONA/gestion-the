<?php
    include_once('../inc/fonction.php');  

    // updateThe($_POST['idThe'], $_POST['nom'], $_POST['occupation'], $_POST['rendement']);
    updateThe(2, 'The', 20, 30);
    echo json_encode(true);
?>