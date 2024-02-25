<?php
include_once '../inc/fonction.php';

deleteDepense($_GET['numero']);
header('Location:../pages/gestion-depenses.php');

?>