<?php
    include_once('../inc/fonction.php');  

    $data = listThe();
    if ($data) {
        echo json_encode($data);
    }
?>