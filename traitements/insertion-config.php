<?php
include_once '../inc/fonction.php';
deleteConfig();

insertConfig($_POST['poidsMin'], $_POST['bonus'], $_POST['mallus']);

header('Location:../pages/configuration-cueilleur.php');

?>