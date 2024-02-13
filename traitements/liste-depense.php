<?php
    include_once('../inc/fonction.php');  

    $data = listDepense();
    if ($data) {
        echo json_encode($data);
    }
?>