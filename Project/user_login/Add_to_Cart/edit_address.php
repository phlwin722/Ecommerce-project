<?php
// Start the session to access session variables
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editChange'])) {
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
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $block_lot = mysqli_real_escape_string($conn, $_POST['block_lot']);
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
    $city = mysqli_real_escape_string($conn, $_POST['cityy']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $email = $_SESSION['email']; // Assuming 'email' is set in the session

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("UPDATE user_information SET Contact_No = ?, `Block_&_Lot` = ?, Barangay = ?, City = ?, Province = ? WHERE Email = ?");
    $stmt->bind_param("ssssss", $contact, $block_lot, $barangay, $city, $province, $email);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Check if any rows were affected
        if ($stmt->affected_rows > 0) {
            // Redirect to payment page or any other page
            header('Location: /shopping-cart-oche/Project/user_login/Add_to_Cart/add_to_cart.php');
            exit();
        } else {
           
        }
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
