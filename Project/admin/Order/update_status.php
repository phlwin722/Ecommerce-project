<?php
// Check if the necessary POST parameters are set
if (isset($_POST['productCode']) && isset($_POST['selectedStatus'])) {
    $productCode = $_POST['productCode'];
    $selectedStatus = $_POST['selectedStatus'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Replace with your actual username
    $password = ""; // Replace with your actual password
    $dbname = "ecommerce"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to update the status
    $stmt = $conn->prepare("UPDATE order_product SET Status = ? WHERE Product_code = ?");
    $stmt->bind_param("ss", $selectedStatus, $productCode);

    if ($stmt->execute()) {
        // Status updated successfully
        echo json_encode(array("success" => true));
    } else {
        // Error occurred while updating status
        echo json_encode(array("success" => false, "error" => "Failed to update status"));
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    // Invalid request, required parameters are missing
    echo json_encode(array("success" => false, "error" => "Invalid request"));
}
?>
