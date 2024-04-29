<?php
    $servername = "localhost";
    $username = "root";
    $Password = "";
    $dbname = "ecommerce";

    $con = new mysqli($servername,$username,$Password,$dbname);
    if ($con->connect_error){
        die ("Connection error " . $con->connect_error);
    }else {
        $new_password = $_GET['newpassword'];
        $email = $_GET ['email'];

        $stmt_update = $con->prepare("UPDATE user_information SET Password = ? WHERE Email =  ?");
        $stmt_update->bind_param("ss",$new_password,$email);
        if ($stmt_update->execute()) {
            header('Content-Type: application/json');
            echo json_encode(array("success" => true));
        }else {
            header('Content-Type: application/json');
            echo json_encode(array("success" => false));
        }
        $stmt_update->close();
    }
    $con->close();
?>