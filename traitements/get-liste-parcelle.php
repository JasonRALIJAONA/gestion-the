<?php
    include_once('../inc/fonction.php');  

    $data = listParcelle($_POST['date']);
    if ($data) {
        echo json_encode($data);
    }
?>