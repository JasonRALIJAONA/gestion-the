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

    function insertThe($nom, $occupation, $rendement)
    {
        $conn = Connect();

        $sql = "insert into the(idThe, nom, occupation, rendement values(null, '$nom', $occupation, $rendement)";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function listThe()
    {
        $conn = Connect();
        $sql = "SELECT * FROM the";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row;
    }

    function updateThe($idThe, $nom, $occupation, $rendement)
    {
        $conn = Connect();
        $sql = "UPDATE the SET nom='$nom', occupation=$occupation, rendement=$rendement WHERE idThe=$idThe";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function deleteThe($idThe)
    {
        $conn = Connect();
        $sql = "DELETE FROM the WHERE idThe=$idThe";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function insertParcelle($numero, $surface, $idThe)
    {
        $conn = Connect();
        $sql = "INSERT INTO parcelle (numero, surface, idThe) VALUES ($numero, $surface, $idThe)";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function listParcelle()
    {
        $conn = Connect();
        $sql = "SELECT * FROM parcelle";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row;
    }

    function updateParcelle($numero, $surface, $idThe)
    {
        $conn = Connect();
        $sql = "UPDATE parcelle SET surface = $surface, idThe = $idThe WHERE numero = $numero";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function deleteParcelle($numero)
    {
        $conn = Connect();
        $sql = "DELETE FROM parcelle WHERE numero = $numero";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function insertCueilleur($nom, $genre, $dateNaissance)
    {
        $conn = Connect();
        $sql = "INSERT INTO cueilleurs (nom, genre, dateNaissance) VALUES ('$nom', '$genre', '$dateNaissance')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function listCueilleur()
    {
        $conn = Connect();
        $sql = "SELECT * FROM cueilleurs";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row;
    }

    function updateCueilleur($idCueilleur, $nom, $genre, $dateNaissance)
    {
        $conn = Connect();
        $sql = "UPDATE cueilleurs SET nom = '$nom', genre = '$genre', dateNaissance = '$dateNaissance' WHERE idCueilleur = $idCueilleur";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function deleteCueilleur($idCueilleur)
    {
        $conn = Connect();
        $sql = "DELETE FROM cueilleurs WHERE idCueilleur = $idCueilleur";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function insertDepense($description)
    {
        $conn = Connect();
        $sql = "INSERT INTO depense (description) VALUES ('$description')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function listDepense()
    {
        $conn = Connect();
        $sql = "SELECT * FROM depense";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row;
    }

    function updateDepense($idDepense, $description)
    {
        $conn = Connect();
        $sql = "UPDATE depense SET description = '$description' WHERE idDepense = $idDepense";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function deleteDepense($idDepense)
    {
        $conn = Connect();
        $sql = "DELETE FROM depense WHERE idDepense = $idDepense";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

?>