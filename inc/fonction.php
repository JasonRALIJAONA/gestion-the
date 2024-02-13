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
?>