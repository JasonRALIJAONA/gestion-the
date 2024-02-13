<?php
include_once '../inc/fonction.php';

insertPrixVente($_POST['variete'], $_POST['prixVente']);
header('Location:../pages/prix-de-vente.php?reponse=1');

?>