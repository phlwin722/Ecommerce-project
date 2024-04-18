<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

if(!isset($_SESSION['email'])) {
    echo json_encode(array("error" => "User not logged in"));
    exit;
}

$email = $_SESSION['email'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(array("error" => "Connection error: " . $conn->connect_error));
    exit;
}

$stmt = $conn->prepare("SELECT COUNT(*) FROM cart_product WHERE Email = ?");
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    $stmt->bind_result($count);
    $stmt->fetch();
    $response = array("count" => $count);
    echo json_encode($response);
} else {
    echo json_encode(array("error" => "Execution failed."));
}

$stmt->close();
$conn->close();
?>
