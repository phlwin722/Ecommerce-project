<?php
// Start the session to access session variables
session_start();

// Check if the form is submitted
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data and sanitize
$contact = mysqli_real_escape_string($conn, $_GET['contact']);
$block_lot = mysqli_real_escape_string($conn, $_GET['block_lot']);
$barangay = mysqli_real_escape_string($conn, $_GET['barangay']);
$city = mysqli_real_escape_string($conn, $_GET['cityy']);
$province = mysqli_real_escape_string($conn, $_GET['province']);
$email = $_SESSION['email']; // Assuming 'email' is set in the session

// Prepare and bind SQL statement
$stmt = $conn->prepare("UPDATE user_information SET Contact_No = ?, `Block_&_Lot` = ?, Barangay = ?, City = ?, Province = ? WHERE Email = ?");
$stmt->bind_param("ssssss", $contact, $block_lot, $barangay, $city, $province, $email);

// Execute SQL statement
if ($stmt->execute()) {
    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        // Redirect to payment page or any other page
        header('Content-Type: application/json');
        echo json_encode(array("success" => true));
    } else {
        // Handle no rows affected case
    }
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
