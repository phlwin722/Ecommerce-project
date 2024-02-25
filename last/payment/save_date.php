<?php
// I-connect sa database
$servername = "localhost";
$username = "root"; // Palitan ito ng iyong username ng database
$password = ""; // Palitan ito ng iyong password ng database
$dbname = "prints"; // Palitan ito ng pangalan ng iyong database

// Lumikha ng connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check ng connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kunin ang petsa at payment ID mula sa form
$date = $_POST['date'];
$payment_id = $_POST['payment_id'];

// I-check kung umiiral ang payment ID sa database bago i-save ang petsa
$check_existing_payment_id = "SELECT * FROM tbl_order WHERE payment_id = '$payment_id'";
$result = $conn->query($check_existing_payment_id);

if ($result->num_rows == 0) {
    // Kung ang resulta ng query ay walang rows, ipakita ang alert box
    echo '<script>alert("Payment ID does not exist.");</script>';
} else {
    // Kung ang payment ID ay umiiral, i-save ang petsa sa database
    $sql = "INSERT INTO tbl_order_status (expected_delivery_date, payment_id) VALUES ('$date', '$payment_id')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Ang petsa at payment ID ay na-save nang maayos sa database.";
    } else {
        echo "May error sa pag-save ng petsa at payment ID: " . $conn->error;
    }
}

// Isara ang connection sa database
$conn->close();
?>
