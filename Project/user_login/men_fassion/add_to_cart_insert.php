<?php
// Check if the request method is POST and if the necessary data is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_code']) && isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['product_image'])) {
    session_start();
   
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";
    
    // Check connection
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error) {
        die("Connection error: " . $con->connect_error);
    }

    // Check if the necessary form fields are set
    $productcode = $_POST['product_code'];
    $productname = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = '1';
    $image = $_POST['product_image'];
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : ''; // Check if email session is set

    $stmt_verfify = $con->prepare("SELECT * FROM cart_product WHERE Product_code = ?");
    $stmt_verfify->bind_param("s",$productcode);
    $stmt_verfify->execute();
    $result = $stmt_verfify->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $quantityy = intval($row['Quantity']);
        }
        $quantity_add = $quantityy + 1;
        // Update and bind statement to insert data into the database
        $stmt = $con->prepare("UPDATE cart_product SET Quantity = ? WHERE Product_code = ?");
        $stmt->bind_param('ss', $quantity_add, $productcode);
        if ($stmt->execute()) {
            // Insertion successful
            $response = array("success" => true, "message" => "Product added to cart successfully");
        } else {
            // Insertion failed
            $response = array("failed" => false, "message" => "Error: " . $stmt->error);
        }
    }else {
            // Prepare and bind statement to insert data into the database
            $stmt = $con->prepare("INSERT INTO cart_product (Product_code, Product_name, Quantity, Price, Email, Image) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('ssssss', $productcode, $productname, $quantity, $price, $email, $image);
            if ($stmt->execute()) {
                // Insertion successful
                $response = array("success" => true, "message" => "Product added to cart successfully");
            } else {
                // Insertion failed
                $response = array("failed" => false, "message" => "Error: " . $stmt->error);
            }
    }

    $stmt->close();
    $stmt_verfify->close();
    $con->close();

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If the form was not submitted properly
    $response = array("success" => false, "message" => "Invalid request");
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

