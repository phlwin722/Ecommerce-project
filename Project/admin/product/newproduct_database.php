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

// If the submit button was pressed 
if (isset($_POST['submit'])) {
    // Prevent SQL injection attacks
    $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    // Check if file was uploaded successfully
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Get the temporary file name
        $image_tmp_name = $_FILES['image']['tmp_name'];
        
        // Read the image file
        $imgContent = file_get_contents($image_tmp_name);

        // Convert image data to base64
        $imgBase64 = base64_encode($imgContent);

        // Prepare and bind statement
        $stmt = $con->prepare("INSERT INTO product_list (Product_name, Quantity, Price, Image) VALUES (?, ?, ?, ?)");
        // Use 's' for string data type
        $stmt->bind_param('ssss', $product_name, $quantity, $price, $imgBase64);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Image inserted successfully.";
        } else {
            echo "Error inserting image: " . $stmt->error;
        }
    } else {
        echo "Error uploading image: " . $_FILES['image']['error'];
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?>
