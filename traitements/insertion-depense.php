<?php
include_once '../inc/fonction.php';

if (isset($_POST['taloha'])) {
    updateDepense($_POST['taloha'], $_POST['depense']); 
}
else {
    insertDepense($_POST['depense']); 
}
header('Location:../pages/gestion-depenses.php');

?>