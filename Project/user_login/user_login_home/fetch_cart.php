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

$stmt = $conn->query("SELECT COUNT(*) as count_product FROM cart_product WHERE Email = '$email'");
$count = $stmt->fetch_assoc()['count_product'];
    $response = array("count" => $count);
    echo json_encode($response);


$stmt->close();
$conn->close();
?>
