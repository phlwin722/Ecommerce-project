<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error){
        die("Connection error" . $con->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the search query
        $searchQuery = $_POST['search_data'];
        // Prepare and execute the SQL statement
        $stmt = $con->prepare("SELECT * FROM product_list WHERE Category = ? AND Product_name LIKE ?");
        // Add wildcards to the search query
        $searchQuery = "%$searchQuery%";
        $stmt->bind_param("ss", $category, $searchQuery);
        $category = "kitchen Tools";
        $stmt->execute();
        // Get the result
        $result = $stmt->get_result();

        // Store the results in an array
        $products = array();
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        // Close statement and connection
        $stmt->close();
        $con->close();

        // Send the result as JSON
        header('Content-Type: application/json');
        echo json_encode($products);
    }
?>
