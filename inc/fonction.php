<?php

    include_once('connexion.php');  
    
    function loginAdmin($email, $mdp)
    {
        $sqlall="select*from utilisateurs where email='$email' And mdp=sha1('$mdp') And role='admin';";
        $valiny=mysqli_query(Connect(), $sqlall);
        $donnee=mysqli_fetch_assoc($valiny);
        $nb=mysqli_num_rows($valiny);
        if ($nb==0) {
            return -1; //tsy nety 
        }
        else
        {
            return $donnee['idUser'];
        }
    }

    function loginUtilisateur($email, $mdp)
    {
        $sqlall="select*from utilisateurs where email='$email' And mdp=sha1('$mdp') And role='utilisateur';";
        $valiny=mysqli_query(Connect(), $sqlall);
        $donnee=mysqli_fetch_assoc($valiny);
        $nb=mysqli_num_rows($valiny);
        if ($nb==0) {
            return -1; //tsy nety 
        }
        else
        {
            return $donnee['idUser'];
        }
    }

    function insertThe($nom, $occupation, $rendement)
    {
        $conn = Connect();
    
        $sql = "INSERT INTO the (nom, occupation, rendement) VALUES ('$nom', $occupation, $rendement)";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }
    
    function getThe($idThe)
    {
        $conn = Connect();
        $sql = "SELECT * FROM the WHERE idThe = $idThe";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // mysqli_close($conn);
        return $row;
    }

    function listThe()
    {
        $conn = Connect();
        $sql = "SELECT * FROM the";
        $result = mysqli_query($conn, $sql);
        $tab = array();
        while($res = mysqli_fetch_array($result))
        {
            $tab[] = $res;
        }
        mysqli_free_result($result); // Correction : Libérer le résultat de la requête, pas le tableau
        // mysqli_close($conn);
        return $tab; // Correction : Retourner le tableau $tab au lieu de $row
    }

    function updateThe($idThe, $nom, $occupation, $rendement)
    {
        $conn = Connect();
        $sql = "UPDATE the SET nom='$nom', occupation=$occupation, rendement=$rendement WHERE idThe=$idThe";
        mysqli_query($conn, $sql);
    }

    function deleteThe($idThe)
    {
        $conn = Connect();
        $sql = "DELETE FROM the WHERE idThe=$idThe";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function insertParcelle($numero, $surface, $idThe)
    {
        $conn = Connect();
        $sql = "INSERT INTO parcelle (numero, surface, idThe) VALUES ($numero, $surface, $idThe)";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function getParcelle($numero)
    {
        $conn = Connect();
        $sql = "SELECT * FROM parcelle WHERE numero = $numero";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // mysqli_close($conn);
        return $row;
    }

    function listParcelle()
    {
        $conn = Connect();
        $sql = "SELECT * FROM parcelle";
        $result = mysqli_query($conn, $sql);

        $parcelles = array(); // Initialisation du tableau des parcelles
        while ($row = mysqli_fetch_assoc($result)) {
            $parcelles[] = $row; // Ajout de chaque ligne de résultat au tableau des parcelles
        }
        // mysqli_close($conn);
        return $parcelles; // Retourner le tableau contenant toutes les parcelles

    }

    function updateParcelle($numero, $surface, $idThe)
    {
        $conn = Connect();
        $sql = "UPDATE parcelle SET surface = $surface, idThe = $idThe WHERE numero = $numero";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function deleteParcelle($numero)
    {
        $conn = Connect();
        $sql = "DELETE FROM parcelle WHERE numero = $numero";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function insertCueilleur($nom, $genre, $dateNaissance)
    {
        $conn = Connect();
        $sql = "INSERT INTO cueilleur (nom, genre, dateNaissance) VALUES ('$nom', '$genre', '$dateNaissance')";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function getCueilleur($idCueilleur)
    {
        $conn = Connect();
        $sql = "SELECT * FROM cueilleur WHERE idCueilleur = $idCueilleur";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // mysqli_close($conn);
        return $row;
    }


    function listCueilleur()
    {
        $conn = Connect();
        $sql = "SELECT * FROM cueilleur";
        $result = mysqli_query($conn, $sql);
        $cueilleurs = array(); // Initialisation du tableau des cueilleurs
        while ($row = mysqli_fetch_assoc($result)) {
            $cueilleurs[] = $row; // Ajout de chaque ligne de résultat au tableau des cueilleurs
        }
        // mysqli_close($conn);
        return $cueilleurs; // Retourner le tableau contenant tous les cueilleurs
    }

    function updateCueilleur($idCueilleur, $nom, $genre, $dateNaissance)
    {
        $conn = Connect();
        $sql = "UPDATE cueilleur SET nom = '$nom', genre = '$genre', dateNaissance = '$dateNaissance' WHERE idCueilleur = $idCueilleur";

        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function deleteCueilleur($idCueilleur)
    {
        $conn = Connect();
        $sql = "DELETE FROM cueilleur WHERE idCueilleur = $idCueilleur";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function insertDepense($description)
    {
        $conn = Connect();
        $sql = "INSERT INTO depense (description) VALUES ('$description')";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function getDepense($idDepense)
    {
        $conn = Connect();
        $sql = "SELECT * FROM depense WHERE idDepense = $idDepense";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // mysqli_close($conn);
        return $row;
    }

    function listDepense()
    {
        $conn = Connect();
        $sql = "SELECT * FROM depense";
        $result = mysqli_query($conn, $sql);
        $cueilleurs = array(); // Initialisation du tableau des cueilleurs
        while ($row = mysqli_fetch_assoc($result)) {
            $cueilleurs[] = $row; // Ajout de chaque ligne de résultat au tableau des cueilleurs
        }
        // mysqli_close($conn);
        return $cueilleurs; // Retourner le tableau contenant tous les cueilleurs
    }

    function updateDepense($idDepense, $description)
    {
        $conn = Connect();
        $sql = "UPDATE depense SET description = '$description' WHERE idDepense = $idDepense";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function deleteDepense($idDepense)
    {
        $conn = Connect();
        $sql = "DELETE FROM depense WHERE idDepense = $idDepense";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function insertSalaire($idCueilleur, $montant)
    {
        $conn = Connect();
        $sql = "INSERT INTO salaire (idCueilleur, montant) VALUES ($idCueilleur, $montant)";
        mysqli_query($conn, $sql);
        // mysqli_close($conn);
    }

    function listSalaire()
    {
        $conn = Connect();
        $sql = "SELECT c.*, s.* FROM cueilleur c JOIN salaire s ON s.idCueilleur = c.idCueilleur";
        $result = mysqli_query($conn, $sql);
        $salaires = array(); // Initialisation du tableau des salaires
        while ($row = mysqli_fetch_assoc($result)) {
            $salaires[] = $row; // Ajout de chaque ligne de résultat au tableau des salaires
        }
        // mysqli_close($conn);
        return $salaires; // Retourner le tableau contenant tous les salaires
    }

    function getSalaire($idCueilleur)
    {
        $conn = Connect();
        $sql = "SELECT c.*, s.* FROM cueilleur c JOIN salaire s ON s.idCueilleur = c.idCueilleur  WHERE c.idCueilleur = $idCueilleur";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // mysqli_close($conn);
        return $row;

    }

    function updateSalaire($idCueilleur, $montant)
    {
        $conn = Connect();
        $sql = "UPDATE salaire SET montant = $montant WHERE idCueilleur = $idCueilleur";
        mysqli_query($conn, $sql);
    }

    function insertCueillette($dateCueillette, $idCueilleur, $numeroParcelle, $poids)
    {
        $conn = Connect();
        $sql = "INSERT INTO cueillette (dateCueillette, idCueilleur, numeroParcelle, poids) VALUES ('$dateCueillette', $idCueilleur, $numeroParcelle, $poids)";
        mysqli_query($conn, $sql);
    }

    function saisieDepense($date, $idDepense, $montant)
    {
        $conn = Connect();
        $sql = "INSERT INTO listeDepense (date, idDepense, montant) VALUES ('$date', $idDepense, $montant)";
        mysqli_query($conn, $sql);
    }

    
    function getAllCueillette($date, $idParcelle) {
        // Connexion à la base de données
        $conn = Connect();

        // Déterminer le premier jour du mois de la date spécifiée
        $firstDayOfMonth = date('Y-m-01', strtotime($date));

        // Requête SQL pour obtenir toutes les cueillettes entre le 1er du mois et la date spécifiée pour la parcelle donnée
        $sql = "SELECT *
                FROM cueillette
                WHERE numeroParcelle = ? 
                AND dateCueillette BETWEEN ? AND ?";
            
        // Préparation de la requête
        $stmt = mysqli_prepare($conn, $sql);

        // Liaison des paramètres
        mysqli_stmt_bind_param($stmt, "iss", $idParcelle, $firstDayOfMonth, $date);

        // Exécution de la requête
        mysqli_stmt_execute($stmt);

        // Récupération des résultats
        $result = mysqli_stmt_get_result($stmt);
        
        // Création d'un tableau pour stocker les cueillettes
        $cueillettes = [];

        // Parcourir les résultats et les ajouter au tableau
        while ($row = mysqli_fetch_assoc($result)) {
            $cueillettes[] = $row;
        }

        // Fermeture de la requête
        mysqli_stmt_close($stmt);

        // Fermeture de la connexion
        // mysqli_close($conn);

        // Retourner le tableau de cueillettes
        return $cueillettes;
    }

    function getPoidsTotal($date, $idParcelle) {
        // Récupérer toutes les cueillettes entre le 1er du mois et la date spécifiée
        $cueillettes = getAllCueillette($date, $idParcelle);
    
        // Initialiser le poids total à zéro
        $totalWeight = 0;
    
        // Parcourir toutes les cueillettes et ajouter leur poids au total
        foreach ($cueillettes as $cueillette) {
            $totalWeight += $cueillette['poids'];
        }
    
        // Retourner le poids total
        return $totalWeight;
    }

    function getPoidsInitial($numeroParcelle) {
        // Connexion à la base de données
        $conn = Connect();

        // Requête SQL pour calculer le poids restant sur la parcelle spécifiée
        $sql = "SELECT 
                    (p.surface * t.rendement) - IFNULL(SUM(c.poids), 0) AS poids_restant_kg
                FROM 
                    parcelle p
                JOIN 
                    the t ON p.idThe = t.idThe
                LEFT JOIN 
                    cueillette c ON p.numero = c.numeroParcelle
                WHERE 
                    p.numero = ?
                GROUP BY 
                    p.numero, p.surface, t.rendement";

            // Préparation de la requête
            $stmt = mysqli_prepare($conn, $sql);

            // Liaison des paramètres
            mysqli_stmt_bind_param($stmt, "i", $numeroParcelle);

            // Exécution de la requête
            mysqli_stmt_execute($stmt);

            // Récupération du résultat
            mysqli_stmt_bind_result($stmt, $poids_restant_kg);
            
            // Récupération du résultat dans un tableau associatif
            mysqli_stmt_fetch($stmt);

            // Fermeture de la requête
            mysqli_stmt_close($stmt);
            // Retourner le poids restant en kg
            return $poids_restant_kg;
        }

    function getPoidsActu($date, $numero)
    {
        return getPoidsInitial($numero) - getPoidsTotal($date, $numero);
    }
    
    function getPoidsTotal2dates($dateDebut, $dateFin) {
        // Initialiser le poids total à zéro
        $totalWeight = 0;

        // Récupérer toutes les parcelles
        $conn = Connect();
        $sql = "SELECT DISTINCT numero FROM parcelle";
        $result = mysqli_query($conn, $sql);

        // Pour chaque parcelle, ajouter le poids total des cueillettes entre les dates spécifiées
        while ($row = mysqli_fetch_assoc($result)) {
            $idParcelle = $row['numero'];
            $poidsParcelle = getPoidsTotal2datesParcelle($dateDebut, $dateFin, $idParcelle);
            $totalWeight += $poidsParcelle;
        }

        // Retourner le poids total
        return $totalWeight;
    }

    function getPoidsTotal2datesParcelle($dateDebut, $dateFin, $idParcelle) {
        // Récupérer toutes les cueillettes entre les deux dates spécifiées pour une parcelle donnée
        $conn = Connect();
        $sql = "SELECT SUM(poids) AS total_poids
                FROM cueillette
                WHERE numeroParcelle = ? 
                AND dateCueillette BETWEEN ? AND ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iss", $idParcelle, $dateDebut, $dateFin);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        // mysqli_stmt_close($stmt);
        // mysqli_close($conn);

        // Retourner le poids total pour la parcelle spécifiée
        return $row['total_poids'];
    }

    function getPoidsRestantTab($datedebut, $dateFin) {
        // Initialiser un tableau pour stocker les poids restants sur chaque parcelle
        $poidsRestants = array();
    
        // Récupérer toutes les parcelles
        $conn = Connect();
        $sql = "SELECT numero, surface FROM parcelle";
        $result = mysqli_query($conn, $sql);
    
        // Pour chaque parcelle, calculer le poids restant à la date de fin
        while ($row = mysqli_fetch_assoc($result)) {
            $idParcelle = $row['numero'];
            $surfaceParcelle = $row['surface'];
            $poidsTotalCueilli = getPoidsTotal2datesParcelle($datedebut, $dateFin, $idParcelle);
            $poidsRestant = $surfaceParcelle - $poidsTotalCueilli;
            $poidsRestants[$idParcelle] = $poidsRestant;
        }
    
        // mysqli_close($conn);
    
        // Retourner le tableau des poids restants sur chaque parcelle
        return $poidsRestants;
    }

    function getPoidsRestant($dateDebut, $dateFin) {
        // Obtenir les poids restants sur chaque parcelle
        $poidsRestants = getPoidsRestantTab($dateDebut, $dateFin);
    
        // Initialiser la variable pour le poids total
        $totalPoidsRestants = 0;
    
        // Itérer à travers les poids restants sur chaque parcelle et les ajouter au total
        foreach ($poidsRestants as $poidsRestant) {
            $totalPoidsRestants += $poidsRestant;
        }
    
        // Retourner le poids total restant sur toutes les parcelles
        return $totalPoidsRestants;
    }

    function getCoutRevientGlobalParKg($dateDebut, $dateFin) {
        // Récupérer le poids total cueilli sur toutes les parcelles entre les deux dates spécifiées
        $poidsTotalCueilli = getPoidsTotal2dates($dateDebut, $dateFin);

        // Récupérer le coût total de toutes les dépenses liées à la cueillette sur toutes les parcelles entre les deux dates spécifiées
        $coutTotalDepenses = getCoutTotalDepenses($dateDebut, $dateFin);

        // Calculer le coût de revient global par kilogramme de thé cueilli
        if ($poidsTotalCueilli > 0) {
            $coutRevientGlobalParKg = $coutTotalDepenses / $poidsTotalCueilli;
        } else {
            // Si aucun thé n'a été cueilli, le coût de revient par kilogramme est indéfini
            $coutRevientGlobalParKg = 0;
        }

        // Retourner le coût de revient global par kilogramme
        return $coutRevientGlobalParKg;
    }

    function getCoutTotalDepenses($dateDebut, $dateFin) {
        // Connexion à la base de données
        $conn = Connect();
    
        // Requête pour obtenir le coût total des dépenses dans la période spécifiée
        $sql = "SELECT SUM(montant) AS total_depenses FROM listeDepense WHERE date BETWEEN '$dateDebut' AND '$dateFin'";
    
        // Exécution de la requête
        $result = mysqli_query($conn, $sql);
    
        // Récupération du résultat
        $row = mysqli_fetch_assoc($result);
    
        // Fermeture de la connexion à la base de données
        // mysqli_close($conn);
    
        // Retour du coût total des dépenses
        return $row['total_depenses'];
    }

    function deleteMois(){
        $conn = Connect();
        $sql = "delete from saison";
        mysqli_query($conn, $sql);
    }

    function insertMois($idMois){
        $conn = Connect();
        $sql = "insert into saison(idMois) values ($idMois)";
        mysqli_query($conn, $sql);
    }

    function deleteConfig(){
        $conn = Connect();
        $sql = "delete from config";
        mysqli_query($conn, $sql);
    }

    function insertConfig($minimum, $bonus, $mallus){
        $conn = Connect();
        $sql = "insert into config(minimum, bonus, mallus) values ($minimum, $bonus, $mallus)";
        mysqli_query($conn, $sql);
    }

    function getConfig()
    {
        $conn = Connect();
        $sql = "SELECT * FROM config";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // mysqli_close($conn);
        return $row;
    }

    function insertPrixVente($idThe, $montant)
    {
        $conn = Connect();
        $sql = "insert into prixVente(idThe, montant) values($idThe, $montant)";
        mysqli_query($conn, $sql);
    }

    function deletePrixVente($idThe){
        $conn = Connect();
        $sql = "delete from prixVente where idThe=$idThe";
        mysqli_query($conn, $sql);
    }

    function getCueillettesByIdCueilleur($dateDebut, $dateFin, $idCueilleur) {
        // Connexion à la base de données
        $conn = Connect();
        
        // Préparation de la requête SQL pour récupérer les cueillettes
        $sql = "SELECT * FROM cueillette WHERE idCueilleur = ? AND dateCueillette BETWEEN ? AND ?";
        
        // Préparation de la requête
        $stmt = $conn->prepare($sql);
        
        // Liaison des paramètres
        $stmt->bind_param("iss", $idCueilleur, $dateDebut, $dateFin);
        
        // Exécution de la requête
        $stmt->execute();
        
        // Récupération des résultats
        $result = $stmt->get_result();
        
        // Création d'un tableau pour stocker les cueillettes
        $cueillettes = array();
        
        // Parcours des résultats et ajout des cueillettes au tableau
        while ($row = $result->fetch_assoc()) {
            $cueillettes[] = $row;
        }
        
        // Fermeture de la connexion et retour des cueillettes
        $stmt->close();
        $conn->close();
        
        return $cueillettes;
    }

    function getNbJour($dateDebut, $dateFin) {
        // Convertir les dates en objets DateTime
        $start_date = new DateTime($dateDebut);
        $end_date = new DateTime($dateFin);
        
        // Calculer la différence entre les deux dates
        $interval = $start_date->diff($end_date);
        
        // Récupérer le nombre de jours de l'intervalle
        $nbJours = $interval->days;
        
        return $nbJours;
    }
    
    function getPoidsTotalCueilli($date, $idCueilleur) {
        // Connexion à la base de données
        $conn = Connect();
        
        // Requête SQL pour récupérer le poids total cueilli par le cueilleur pour une journée spécifique
        $sql = "SELECT SUM(poids) AS poids_total FROM cueillette WHERE idCueilleur = $idCueilleur AND dateCueillette = '$date'";
        
        // Exécution de la requête
        $result = mysqli_query($conn, $sql);
        $poids_total = 0;
    
        // Vérification s'il y a des résultats
        if ($result && mysqli_num_rows($result) > 0) {
            // Récupération du poids total cueilli
            $row = mysqli_fetch_assoc($result);
            $poids_total = $row['poids_total'];
        }
        
        // Fermeture de la connexion à la base de données
        // mysqli_close($conn);
        
        return $poids_total;
    }
    
    
    function getMontantPaiement($date, $idCueilleur)
    {
        // $nbJours = getNbJour($dateDebut, $dateFin);
        $min = getConfig()['minimum'];
        $bonus = getConfig()['bonus'];
        $mallus = getConfig()['mallus'];

        $poids_total = getPoidsTotalCueilli($date, $idCueilleur);

        $salaireParKilo = getSalaire($idCueilleur)['montant'];

        if ($poidsTotal >= $min) {
            $normal = $poids_total*$salaireParKilo;
            $bonnification = (($poidsTotal - $min)*$salaireParKilo)*$bonus/100;
            return ($normal + $bonnification);
        }
        else {
            $salaireParKilo = $salaireParKilo - ($salaireParKilo*$mallus/100);
            return $salaireParKilo*$poidsTotal;   
        }
    }

    function getMontantPaiement2($dateDebut, $dateFin, $idCueilleur)
    {
    
        // Initialiser le montant total du paiement pour ce cueilleur
        $montantTotal = 0;

        // Boucler à travers chaque jour de cueillette entre les dates spécifiées
        $dateActuelle = $dateDebut;
        while ($dateActuelle <= $dateFin) {
            // Calculer le montant du paiement pour ce jour de cueillette
            $montantPaiement = getMontantPaiement($dateActuelle, $idCueilleur);

            // Ajouter le montant du paiement au montant total pour ce cueilleur
            $montantTotal += $montantPaiement;

            // Passer au jour suivant
            $dateActuelle = date('Y-m-d', strtotime($dateActuelle . ' +1 day'));
        }

        // Stocker le montant total du paiement pour ce cueilleur dans le tableau
        return $montantTotal;

    }
    
    function getPoidsAzo($dateDebut, $dateFin, $idCueilleur)
    {
    
        // Initialiser le montant total du paiement pour ce cueilleur
        $poidsTotal = 0;

        // Boucler à travers chaque jour de cueillette entre les dates spécifiées
        $dateActuelle = $dateDebut;
        while ($dateActuelle <= $dateFin) {
            $poids = getPoidsTotalCueilli($dateActuelle, $idCueilleur);

            // Ajouter le montant du paiement au montant total pour ce cueilleur
            $poidsTotal += $poids;

            // Passer au jour suivant
            $dateActuelle = date('Y-m-d', strtotime($dateActuelle . ' +1 day'));
        }

        // Stocker le montant total du paiement pour ce cueilleur dans le tableau
        return $poidsTotal;
    }

    function listPaiement($dateDebut, $dateFin) {
        // Connexion à la base de données
        $conn = Connect();
    
        // Initialisation d'un tableau pour stocker les montants de paiement par idCueilleur
        $valiny = array();
    
        // Récupérer tous les cueilleurs
        $sql = "SELECT idCueilleur, nom FROM cueilleur";
        $result = mysqli_query($conn, $sql);
    
        // Pour chaque cueilleur, calculer le montant du paiement pour chaque jour de cueillette entre les dates spécifiées
        while ($row = mysqli_fetch_assoc($result)) {
            $valiny[] = $row;
        }
    
        for ($i=0; $i < count($valiny); $i++) { 
            $valiny[$i]['dateDebut'] = $dateDebut;
            $valiny[$i]['dateFin'] = $dateFin;
            $valiny[$i]['poids'] = getPoidsAzo($dateDebut, $dateFin, $valiny[$i]['idCueilleur']);
            $valiny[$i]['bonus'] = getConfig()['bonus'];
            $valiny[$i]['mallus'] = getConfig()['mallus'];
            $valiny[$i]['montantPaiement'] = getMontantPaiement2($dateDebut, $dateFin, $valiny[$i]['idCueilleur']);
        }
        return $valiny;
    }

    function getMontantVentes($dateDebut, $dateFin) {
        // Connexion à la base de données
        $conn = Connect();
    
        // Requête SQL pour récupérer le montant total des ventes effectuées entre les deux dates
        $sql = "SELECT SUM(c.poids * p.montant) AS montant_total
        FROM cueillette c
        JOIN parcelle par ON par.numero = c.numeroParcelle
        Join prixVente p on par.idThe = p.idThe
        WHERE c.dateCueillette BETWEEN '$dateDebut' AND '$dateFin'";
    
        // Exécution de la requête
        $result = mysqli_query($conn, $sql);
    
        // Vérification s'il y a des résultats
        if ($result && mysqli_num_rows($result) > 0) {
            // Récupération du montant total des ventes
            $row = mysqli_fetch_assoc($result);
            $montant_total = $row['montant_total'];
        } else {
            // Aucune vente effectuée entre les deux dates
            $montant_total = 0;
        }
    
        return $montant_total;
    }

    function getMontantDepenses($dateDebut, $dateFin) {
        // Connexion à la base de données
        $conn = Connect();
    
        // Requête SQL pour récupérer le montant total des dépenses entre les deux dates
        $sql = "SELECT SUM(montant) AS montant_total
                FROM listeDepense
                WHERE date BETWEEN '$dateDebut' AND '$dateFin'";
    
        // Exécution de la requête
        $result = mysqli_query($conn, $sql);
    
        // Vérification s'il y a des résultats
        if ($result && mysqli_num_rows($result) > 0) {
            // Récupération du montant total des dépenses
            $row = mysqli_fetch_assoc($result);
            $montant_total = $row['montant_total'];
        } else {
            // Aucune dépense enregistrée entre les deux dates
            $montant_total = 0;
        }
    
        return $montant_total;
    }
    
    

?>