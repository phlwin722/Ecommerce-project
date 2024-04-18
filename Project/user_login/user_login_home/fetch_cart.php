<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    //to get the email on session
    session_start();
    $email = $_POST['email'];

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die('Connetion error: '. $conn->connect_error);
    }else {
        
    }
?>