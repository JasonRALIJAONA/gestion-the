<?php 
    function Connect()
    {
        static $bdd = null;
        if ($bdd===null) {
            $bdd = mysqli_connect('localhost','root','','gestion_the');
        }
        return $bdd;
    }

?>