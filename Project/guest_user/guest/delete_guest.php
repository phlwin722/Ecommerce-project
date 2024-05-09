<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli  ($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die("Connection error: " . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("DELETE FROM cart_product WHERE Email = 'guest'");
        if ($stmt->execute()){
            $response = array ("success" => true );
            header('Content-Type: application/json');
            echo json_encode($response);
        }
        $stmt->close();
    }
    $conn->close();
?>