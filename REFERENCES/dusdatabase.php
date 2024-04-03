<?php 
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname = "ecommerce";

    $con = new mysqli ($servername,$username,$password,$dbname);

    if ($con->connect_error){
        die ("Connection Error:" . $con->connect_error);
    }
?>