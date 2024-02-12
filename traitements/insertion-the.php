<?php
    include_once('../inc/fonction.php');  

    insertThe($_POST['nom'], $_POST['occupation'], $_POST['rendement']);
    // insertThe('jax', 69, 70);
    echo json_encode(true);
?>