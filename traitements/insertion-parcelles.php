<?php
include_once '../inc/fonction.php';

insertParcelle($_POST['numero'], $_POST['surface'], $_POST['idThe'])
header('Location:../pages/gestion-parcelles.php');

?>