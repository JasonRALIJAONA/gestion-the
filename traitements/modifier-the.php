<?php
    include_once('../inc/fonction.php');  

    $data = getThe($_POST['idThe']);
    echo json_encode($data);
?>