<?php
    include_once('../inc/fonction.php');  

    $data = getTotalRestant($_POST['date']);
    if ($data) {
        echo json_encode($data);
    }
?>