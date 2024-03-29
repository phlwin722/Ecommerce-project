<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    // create connection 
    $con = new mysqli ($servername,$username,$password, $dbname);

    // connection check

    if ($con->connect_error){
        die("Connection eroor: " . $con->connect_error);
    }

    // fetch data from database
    $sql ="SELECT * FROM feedback";
    $result = $con->query($sql);

    // container of all content of database
    $feedback = array(); 

    if ($result->num_rows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()){
            $feedback [] = $row;
        }
    }
    // close connection
    $con->close();

    // return data as json
    header('Content-Type: application/json');
    echo json_encode($feedback);
?>