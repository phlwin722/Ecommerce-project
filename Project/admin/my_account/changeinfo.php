<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $con = new mysqli ($servername,$username,$password,$dbname);

    if ($con->connect_error){
        die ("Connection error" . $con->connect_error);
    } else {
        $changeLastname = mysqli_escape_string($con, $_GET['changelastname']);
        $changeFirstname = mysqli_escape_string($con, $_GET['changefirstname']);
        $changeUsername = mysqli_escape_string($con, $_GET['changeusername']);

        $stmt_change = $con->prepare("UPDATE admin SET First_name = ?, Last_name = ?, Username = ?");
        $stmt_change->bind_param("sss", $changeFirstname, $changeLastname, $changeUsername);
        $stmt_change->execute();
        if ($stmt_change->affected_rows > 0) {
            header("Content-Type: application/json");
            echo json_encode(array("success" => true));
        } else {
            echo json_encode(array("success" => false));
        }
        $stmt_change->close();
    }
    $con->close();
?>
