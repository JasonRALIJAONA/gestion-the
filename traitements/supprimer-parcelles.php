<?php
include_once '../inc/fonction.php';

deleteParcelle($_GET['numero']);
header('Location:../pages/gestion-parcelles.php');

?>