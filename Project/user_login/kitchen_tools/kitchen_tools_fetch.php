<?php
    // Establish connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";
    $category = "kitchen Tools";

    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
   
    // Prepare and bind SQL query with parameter
    $sql = "SELECT Product_code, Product_name, Price, Category, Image FROM product_list WHERE Category = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $category);

    // Execute SQL query
    $stmt->execute();

    // Get result set
    $result = $stmt->get_result();

    // Fetch and store data in an array
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

