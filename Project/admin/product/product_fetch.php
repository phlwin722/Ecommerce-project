<?php
    // Establish connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Fetch data from database
    $sql = "SELECT Product_name, Quantity, Price, Image FROM product_list";
    $result = $con->query($sql);

    // Fetch and store data in an array
    $product_list = array();

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Decode image data from base64
            $row['Image'] = base64_encode($row['Image']);
            $product_list[] = $row;
        }
    }

    // Close connection
    $con->close();

    // Return data in JSON format
    header('Content-Type: application/json');
    echo json_encode($product_list);
?>
