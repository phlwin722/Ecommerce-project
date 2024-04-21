<?php 
// Get the product code from the GET parameters
$Product_code = $_REQUEST['q'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($con->connect_error){
    die ('Connection error' . $con->connect_error);
} else {
    // Retrieve the product details from the product_list table
    $stmt = $con->prepare("SELECT Product_code, Product_name, Quantity, Price, Category, Image FROM `product_list` WHERE Product_code = ?");
    $stmt->bind_param('s', $Product_code);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Insert the product details into the archives_product table
        $stmt = $con->prepare("INSERT INTO archives_product (Product_code, Product_name, Quantity, Price, Category, Image) VALUES (?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param('ssssss', $row['Product_code'], $row['Product_name'], $row['Quantity'], $row['Price'], $row['Category'], $row['Image']);
        if (!$stmt->execute()) {
            echo "Error inserting into archives_product: " . $stmt->error;
        }

        // Delete the product from the product_list table
        $stmt = $con->prepare("DELETE FROM product_list WHERE Product_code = ?");
        $stmt->bind_param('s', $Product_code);
        if (!$stmt->execute()) {
            echo "Error deleting from product_list: " . $stmt->error;
        }
        
        echo "Product deleted and moved to archives_product successfully.";
    } else {
        echo "Product not found.";
    }
}
?>
