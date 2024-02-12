<?php
include_once '../inc/fonction.php';

insertParcelle($_POST['numero'], $surface, $idThe)
modifierListe($idCarte, $_POST['nom'], $_POST['serie'], $_POST['prix']);
header('Location:carteAdmin.php?succes=0&&idCarte='.$idCarte);

?>