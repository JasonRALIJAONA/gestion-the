<?php
include_once '../inc/fonction.php';

insertCueilleur($_POST['nom'], $_POST['genre'], $_POST['dateNaissance']);
header('Location:../pages/gestion-cueilleurs.html');

?>