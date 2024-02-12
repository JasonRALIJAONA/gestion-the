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
    }
    
    function getThe($idThe)
    {
        $conn = Connect();
        $sql = "SELECT * FROM the WHERE idThe = $idThe";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
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
    }

    function insertParcelle($numero, $surface, $idThe)
    {
        $conn = Connect();
        $sql = "INSERT INTO parcelle (numero, surface, idThe) VALUES ($numero, $surface, $idThe)";
        mysqli_query($conn, $sql);
    }

    function getParcelle($numero)
    {
        $conn = Connect();
        $sql = "SELECT * FROM parcelle WHERE numero = $numero";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function listParcelle()
    {
        $conn = Connect();
        $sql = "SELECT * FROM parcelle";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function updateParcelle($numero, $surface, $idThe)
    {
        $conn = Connect();
        $sql = "UPDATE parcelle SET surface = $surface, idThe = $idThe WHERE numero = $numero";
        mysqli_query($conn, $sql);
    }

    function deleteParcelle($numero)
    {
        $conn = Connect();
        $sql = "DELETE FROM parcelle WHERE numero = $numero";
        mysqli_query($conn, $sql);
    }

    function insertCueilleur($nom, $genre, $dateNaissance)
    {
        $conn = Connect();
        $sql = "INSERT INTO cueilleur (nom, genre, dateNaissance) VALUES ('$nom', '$genre', '$dateNaissance')";
        mysqli_query($conn, $sql);
    }

    function getCueilleur($idCueilleur)
    {
        $conn = Connect();
        $sql = "SELECT * FROM cueilleur WHERE idCueilleur = $idCueilleur";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }


    function listCueilleur()
    {
        $conn = Connect();
        $sql = "SELECT * FROM cueilleur";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }


    function updateCueilleur($idCueilleur, $nom, $genre, $dateNaissance)
    {
        $conn = Connect();
        $sql = "UPDATE cueilleur SET nom = '$nom', genre = '$genre', dateNaissance = '$dateNaissance' WHERE idCueilleur = $idCueilleur";
        $sql2 = "UPDATE cueilleur SET nom = '$nom', genre = '$genre', dateNaissance = '$dateNaissance' WHERE idCueilleur = $idCueilleur";

        mysqli_query($conn, $sql);
    }

    function deleteCueilleur($idCueilleur)
    {
        $conn = Connect();
        $sql = "DELETE FROM cueilleur WHERE idCueilleur = $idCueilleur";
        mysqli_query($conn, $sql);
    }

    function insertDepense($description)
    {
        $conn = Connect();
        $sql = "INSERT INTO depense (description) VALUES ('$description')";
        mysqli_query($conn, $sql);
    }

    function getDepense($idDepense)
    {
        $conn = Connect();
        $sql = "SELECT * FROM depense WHERE idDepense = $idDepense";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function listDepense()
    {
        $conn = Connect();
        $sql = "SELECT * FROM depense";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function updateDepense($idDepense, $description)
    {
        $conn = Connect();
        $sql = "UPDATE depense SET description = '$description' WHERE idDepense = $idDepense";
        mysqli_query($conn, $sql);
    }

    function deleteDepense($idDepense)
    {
        $conn = Connect();
        $sql = "DELETE FROM depense WHERE idDepense = $idDepense";
        mysqli_query($conn, $sql);
    }

    function insertSalaire($idCueilleur, $montant)
    {
        $conn = Connect();
        $sql = "INSERT INTO salaire (idCueilleur, montant) VALUES ($idCueilleur, $montant)";
        mysqli_query($conn, $sql);
    }

    function lireSalaire()
    {
        $conn = Connect();
        $sql = "SELECT c.*, s.* FROM cueilleur c JOIN salaire s ON s.idCueilleur = c.idCueilleur;";
        mysqli_query($conn, $sql);
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


?>