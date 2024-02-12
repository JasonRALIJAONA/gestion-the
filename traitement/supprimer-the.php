<?php
    include_once('../inc/fonction.php');  
    deleteThe($_GET['idThe']);
    echo json_encode(true);
?>