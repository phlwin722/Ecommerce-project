<?php
session_start();
// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$email = $_SESSION['email'];
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare and bind SQL query with parameter
$sql = "SELECT First_name, Last_name, Middle_name, Contact_No, `Block_&_Lot`, Barangay, City, Province FROM user_information WHERE Email = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $email);

// Execute SQL query
$stmt->execute();

// Get result set
$result = $stmt->get_result();

// Fetch data and store in an array
$product_list = array();
while ($row = $result->fetch_assoc()) {
    $product_list[] = $row;
}

// Close statement and connection
$stmt->close();
$con->close();

// Return data in JSON format
header('Content-Type: application/json');
echo json_encode($product_list);
?>
