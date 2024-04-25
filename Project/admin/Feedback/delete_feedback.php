<?php 
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die ("Connection error"). $conn->connect_error;
    }else {
        $email = $_GET['email'];

        $stmt_delete = $conn-> prepare("DELETE FROM feedback WHERE Email = ?");
        $stmt_delete->bind_param("s",$email);
            if ($stmt_delete->execute()){
                header('Content-Type: application/json');
                echo json_encode(array("success" => true));
            }
            $stmt_delete->close();
    }
    $conn->close();
?>