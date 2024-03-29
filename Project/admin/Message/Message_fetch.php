<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM message";
$result = $con->query($sql);

$message = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $message[] = $row;
    }
}

// Close connection
$con->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($message);
?>