<?php
    include_once('../inc/fonction.php');  

    $data = listThe();
    echo json_encode($data);
?>