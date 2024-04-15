<?php 

 // Check if the form is submitted
 if (isset($_POST['cart'])) {
                // Establish database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecommerce";
                $con = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($con->connect_error) {
                    die("Connection error: " . $con->connect_error);
                }else{
                    // Check if the necessary form fields are set
                    $productcode = $_POST['product_code'];
                    $productname = $_POST['product_name'];
                    $price = $_POST['price'];
                    $quantity = '1';
                    $image = $_POST['product_image'];
                    $email = isset($_SESSION['email']) ? $_SESSION['email'] : ''; // Check if email session is set
                    
                // Prepare and bind statement to insert data into the database
                $stmt = $con->prepare("INSERT INTO cart_product (Product_code, Product_name, Quantity, Price, Email, Image) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param('ssssss', $productcode, $productname, $quantity, $price, $email, $image);
                if ($stmt->execute()) {
                    // Insertion successful
                    // Redirect or display success message
                } else {
                    // Insertion failed
                    // Handle the error
                }
                $stmt->close();
                $con->close();
            } 
  }

?>