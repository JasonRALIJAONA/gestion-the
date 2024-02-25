<?php
    include_once('../inc/fonction.php');  

    $data = listParcelleAvecDate($_POST['date']);
    if ($data) {
        echo json_encode($data);
    }
?>