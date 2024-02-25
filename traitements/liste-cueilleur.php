<?php
    include_once('../inc/fonction.php');  

    $data = listCueilleur();
    if ($data) {
        echo json_encode($data);
    }
?>