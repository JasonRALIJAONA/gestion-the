<?php
    include_once('fonction.php');  

    $data = listThe();
    echo json_encode($data);
?>