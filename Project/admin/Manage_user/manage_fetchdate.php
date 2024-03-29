<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; // Enter your MySQL password here
    $dbname = "ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from database
    $sql = "SELECT ID, First_name, Last_name, Middle_name, `Block_&_Lot`, Barangay, City, Province, Email FROM user_information";
    $result = $conn->query($sql);

    $manage_user = array();
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $manage_user[] = $row;
        }
    }

    // Close connection
    $conn->close();

    // Return data as JSON
    header('Content-Type: application/json');
    echo json_encode($manage_user);
?>
