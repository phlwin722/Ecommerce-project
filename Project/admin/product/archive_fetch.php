<?php 
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "ecommerce";

    // create connection
    $con = mysqli_connect($servername,$username,$password,$dbname);

    // check connection 
    if ($con->connect_error){
        die('Connection error: '.$con->connect_error);
    }
    // fetch data from database 
    $sql = "SELECT * FROM archives_product";
    $result = $con->query($sql);
    // this array is inset all of data from database of each row
    $archieve = array();

    if ($result->num_rows > 0){
        // output data of each row
        while ($row = $result->fetch_assoc()){
            $archieve [] = $row ;
        }
    }
    $con->close();

    // return data as JSON
    header('Content-Type: application/json');
    echo json_encode($archieve);
?>