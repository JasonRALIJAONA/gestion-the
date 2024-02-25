<?php
include_once '../inc/fonction.php';

if (isset($_POST['taloha'])) {
    updateSalaire($_POST['cueilleur'], $_POST['salaire']);
}
else {
    insertSalaire($_POST['cueilleur'], $_POST['salaire']);
}
header('Location:../pages/gestion-salaires.php');

?>