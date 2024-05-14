<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data sent via POST request
    $productCode = $_POST['product_code'];
    $productName = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $totalPrice = $_POST['total_price'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    $status = 'Pending';
    $payment = $_POST['payment'];
    $addresss = $_POST['addresss'];
    $contact = $_POST['contact'];
    $fullname = $_POST['fullname'];
    $statuss = $_POST['status'];
 
    // Your database connection code goes here
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

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO order_product ( Product_code, Product_name, Quantity, Price, Total_price, Status, Email, Full_name, Contact_No, Address, Mode_payment,Stat, Image) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiisssssssss", $productCode, $productName, $quantity, $price, $totalPrice,$status, $email,$fullname,$contact,$addresss,$payment,$statuss, $image);

    // Execute the statement
    if ($stmt->execute()) {
        // delete product from cart_product
        $stmt_delete = $conn->prepare("DELETE FROM cart_product WHERE Product_code = ?");
        $stmt_delete->bind_param("s",$productCode);

        if ($stmt_delete->execute()){
        $response = array("success" => true);
        echo json_encode($response);
        }
    } else {
        // Insertion failed
        $response = array("success" => false);
        echo json_encode($response);
    }

    // Close the connection
    $stmt->close();
    $conn->close();
} else {
    // If request method is not POST, return an error response
    $response = array("success" => false, "error" => "Invalid request method");
    echo json_encode($response);
}
?>
