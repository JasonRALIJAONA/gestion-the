<?php
include_once '../inc/fonction.php';

if (isset($_POST['taloha'])) {
    updateParcelle($_POST['numero'], $_POST['surface'], $_POST['idThe']);
}
else {
    insertParcelle($_POST['numero'], $_POST['surface'], $_POST['idThe']);
}
header('Location:../pages/gestion-parcelles.php');

?>