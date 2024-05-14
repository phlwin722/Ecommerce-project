<?php
    session_start();
    $email = 'guest';

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

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM cart_product WHERE Email = ?");
    $stmt->bind_param("s",$email);

    // Execute the delete statement
    $success = $stmt->execute();

    // Debugging: Check if deletion was successful
    if ($success) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode(array("success" => $success));

?>
