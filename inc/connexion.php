<?php 
    function Connect()
    {
        static $bdd = null;
        if ($bdd===null) {
            $bdd = mysqli_connect('172.10.0.113','ETU002382','YYYyzabWjE7B','db_p16_ETU002382');
        }
        return $bdd;
    }

?>