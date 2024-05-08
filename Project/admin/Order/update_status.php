<?php
// Check if the necessary POST parameters are set
if (isset($_GET['productCode']) && isset($_GET['selectedStatus'])) {
    $productCode = $_GET['productCode'];
    $selectedStatus = $_GET['selectedStatus'];
    $quantity_orderproduct = "";
    $quantity_productlist = "";
    $total_sales = '';
 
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Replace with your actual username
    $password = ""; // Replace with your actual password
    $dbname = "ecommerce"; // Replace with your actual database name

    // Create a new DateTime object tp het the current date
    $currentDate = new DateTime ();

    // format the current date as yyyy-mm-dd
    $date = $currentDate->format('Y-m-d');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
        echo $selectedStatus;
        if ($selectedStatus == "Delivered") {
             // Prepare and execute SQL statement to update the status
            $stmt = $conn->prepare("UPDATE order_product SET Status = ? WHERE Product_code = ?");
            $stmt->bind_param("ss", $selectedStatus, $productCode);
            $stmt->execute();

            $stmt_fetch = $conn->prepare('SELECT *  FROM order_product WHERE Product_code = ? ');
            $stmt_fetch->bind_param("s",$productCode);
            $stmt_fetch->execute();
            $result_fetch = $stmt_fetch->get_result();

            if ($result_fetch-> num_rows > 0) {
                while ($row = $result_fetch->fetch_assoc()){
                    $quantity_orderproduct = $row['Quantity'];
                    $total_sales = $row ['Total_price'];
                }
            }
            $stmt_fetchproduct = $conn->prepare('SELECT Quantity FROM product_list WHERE Product_code = ?');
            $stmt_fetchproduct->bind_param('s',$productCode);
            $stmt_fetchproduct->execute();
            $result_list = $stmt_fetchproduct->get_result();
            
            if ($result_list->num_rows > 0) {
                while ($row_list = $result_list->fetch_assoc()){
                    $quantity_productlist = $row_list ['Quantity'];
                }
            }
            $result_quantity_update = intval($quantity_productlist) - intval($quantity_orderproduct);
            $stmt_update_quantity= $conn->prepare('UPDATE product_list SET Quantity = ? WHERE Product_code = ?');
            $stmt_update_quantity->bind_param("ss",$result_quantity_update,$productCode);
            if ($stmt_update_quantity->execute()) {
                // insert sales
               $stmt_insert = $conn->prepare('INSERT INTO sales_report (Sales, Date) VALUES (?, ?)');
               $stmt_insert->bind_param("ss",$total_sales,$date);
               if ($stmt_insert->execute()) {
                header ('Content-Type: application/json');
                echo json_encode(array("success" => true));
               }
            }
            
        }else {
            
        // Prepare and execute SQL statement to update the status
        $stmt = $conn->prepare("UPDATE order_product SET Status = ? WHERE Product_code = ?");
        $stmt->bind_param("ss", $selectedStatus, $productCode);

        if ($stmt->execute()) {
            // Status updated successfully
            echo json_encode(array("success" => true));
        } else {
            // Error occurred while updating status
            echo json_encode(array("success" => false, "error" => "Failed to update status"));
        }

        // Close connection
        $stmt->close();
        $conn->close();
            }
        }
    } else {
        // Invalid request, required parameters are missing
        echo json_encode(array("success" => false, "error" => "Invalid request"));
    }
?>
