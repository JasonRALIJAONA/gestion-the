<?php
    include_once('../inc/fonction.php');  
    deleteCueilleur($_GET['idThe']);
    echo json_encode(true);
?>