<?php
    include_once('../inc/fonction.php');  

    $data = listParcelle();
    if ($data) {
        echo json_encode($data);
    }
?>