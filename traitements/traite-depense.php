<?php
include_once '../inc/fonction.php';
saisieDepense($_POST['date'], $_POST['depense'], $_POST['montant']);

header('Location:../pages/saisie-depenses.php?resultat=success');

?>