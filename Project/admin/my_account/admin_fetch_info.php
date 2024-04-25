<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error){
    die("Connection error: " . $con->connect_error);
} else {
    $stmt_fetch = $con->prepare("SELECT * FROM admin");
    if ($stmt_fetch->execute()) {
        $result = $stmt_fetch->get_result();

        $response = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    $stmt_fetch->close();
}
$con->close();
?>
