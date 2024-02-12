<?php
    include_once('fonction.php');  
    deleteThe($_GET['idThe']);
    echo json_encode(true);
?>