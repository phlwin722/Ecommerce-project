<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die ('Connection error' . $conn->connect_error);
    } else {
        $currentPassword = $_GET['currentPassword'];
        $newPassword = $_GET['newPassword'];

        $stmt_check = $conn->prepare("SELECT * FROM user_information WHERE Password = ?");
        $stmt_check->bind_param("s", $currentPassword);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            $stmt_check->close(); // Close the result set of the SELECT query

            $stmt_update = $conn->prepare("UPDATE user_information SET Password = ? WHERE Password = ?");
            $stmt_update->bind_param("ss", $newPassword, $currentPassword);

            if ($stmt_update->execute()) {
                header('Content-Type: application/json');
                echo json_encode(array("success" => true));
            } else {
                // Handle UPDATE query execution failure
            }
            $stmt_update->close();
        } else {
            // Handle SELECT query execution failure
            echo json_encode(array("success" => false));
        }
    }

    $conn->close();
?>
