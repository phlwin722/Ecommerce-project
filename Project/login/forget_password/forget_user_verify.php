<?php 
$servername = "localhost";
$username = "root";
$dbpassword = ""; // Changed variable name to avoid conflict with form field
$dbname = "ecommerce";

// Create connection 
$con = new mysqli($servername, $username, $dbpassword, $dbname);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
} else {
    $email = $_GET['email'];

    $sql = "SELECT Email FROM user_information WHERE Email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Prepare JSON response
    $response = array();

    if ($result->num_rows > 0) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }

    // Output JSON response
    header('Content-Type: application/json');
    echo json_encode($response);

    $stmt->close();
}
$con->close();
?>
