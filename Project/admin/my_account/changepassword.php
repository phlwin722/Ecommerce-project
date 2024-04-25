<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $con = new mysqli ($servername,$username,$password,$dbname);

    if ($con->connect_error) {
        die ("Connection error" . $con->connect_error);
    } else {
        $currentPassword = $_GET['currentpassword'];
        $newPassword = $_GET['newpassword'];

        $stmt_check = $con->prepare("SELECT * FROM admin WHERE Password = ?");
        $stmt_check->bind_param("s", $currentPassword);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            $stmt_update = $con->prepare("UPDATE admin SET Password = ? WHERE Password = ?");
            $stmt_update->bind_param("ss", $newPassword, $currentPassword);
            $stmt_update->execute();
            
            if ($stmt_update->affected_rows > 0) {
                header('Content-Type: application/json');
                echo json_encode(array("success" => true));
            } else {
                header('Content-Type: application/json');
                echo json_encode(array("success" => false, "message" => "Password update failed"));
            }
        } else {
            header('Content-Type: application/json');
            echo json_encode(array("success" => false, "message" => "Current password is incorrect"));
        }
    }
?>
