<?php
include_once '../inc/fonction.php';
deleteMois();
if (isset($_POST['mois'])) {
    // Parcourir les cases à cocher sélectionnées
    foreach ($_POST['mois'] as $mois) {
        // Insérer chaque mois sélectionné dans votre table ou effectuer d'autres opérations nécessaires
        insertMois($mois);
    }
} else {
    echo "Aucun mois sélectionné.";
}
header('Location:../pages/configuration-mois.php');

?>