<?php 

   // Database connection parameters
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
   
   // Retrieve the product details from the archives_product table
   $stmt_select = $conn->prepare("SELECT * FROM archives_product WHERE Product_code = ?");
   $stmt_select->bind_param('s', $_REQUEST["q"]);
   $stmt_select->execute();
   $result = $stmt_select->get_result();
   
   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
   
       // Check if the product code already exists in the product_list table
       $check_stmt = $conn->prepare("SELECT * FROM product_list WHERE Product_code = ?");
       $check_stmt->bind_param('s', $row['Product_code']);
       $check_stmt->execute();
       $check_result = $check_stmt->get_result();
   
       if ($check_result->num_rows > 0) {
           // Product code already exists in the product_list table, handle accordingly (e.g., update or skip)
           // You can add your logic here
           header('Content-Type: application/json');
           echo json_encode(array("success" => false, "message" => "Product code already exists in product_list table."));
           exit();
       } else {
           // Insert the product details into the product_list table
           $stmt_insert = $conn->prepare("INSERT INTO product_list (Product_code, Product_name, Quantity, Price, Category, Image) VALUES (?, ?, ?, ?, ?, ?) ");
           $stmt_insert->bind_param('ssssss', $row['Product_code'], $row['Product_name'], $row['Quantity'], $row['Price'], $row['Category'], $row['Image']);
   
           if ($stmt_insert->execute()) {
               // Delete the product from the archives_product table
               $stmt_delete = $conn->prepare("DELETE FROM archives_product WHERE Product_code = ?");
               $stmt_delete->bind_param('s', $_REQUEST["q"]);
               $stmt_delete->execute();
   
               // Send the JSON response
               header('Content-Type: application/json');
               echo json_encode(array("success" => true, "message" => "Product found and moved to product_list."));
               exit();
           } else {
               // Send the JSON response
               header('Content-Type: application/json');
               echo json_encode(array("success" => false, "message" => "Error inserting into product_list: " . $stmt_insert->error));
               exit();
           }
           $stmt_insert->close();
       }
   } else {
       // Send the JSON response
       header('Content-Type: application/json');
       echo json_encode(array("success" => false, "message" => "Product not found in archives_product."));
       exit();
   }
   
   // Close statement and connection
   $stmt_select->close();
   $conn->close();
?>
