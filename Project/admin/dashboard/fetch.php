<?php
    $servername = "localhost";
    $username = "root";
    $password = "" ;
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error) {
        die ("connetction error" .$conn->connect_error);
    }else {
        // fetch of all total sale total order total user total product
         // Count users
$stmt_count = $conn->query("SELECT COUNT(*) as total_user FROM  user_information");
$total_user = $stmt_count->fetch_assoc()['total_user'];

// count product
$stmt_countprod = $conn->query("SELECT COUNT(*) as total_product FROM product_list");
$total_product = $stmt_countprod->fetch_assoc()['total_product'];

// count order
$stmt_countorder = $conn->query("SELECT COUNT(*) as total_order FROM order_product WHERE Status = 'Pending' OR Status = 'On the way'");
$total_order = $stmt_countorder->fetch_assoc()['total_order'];

# count of deliverd
$stmt_countdelivered =  $conn->query("SELECT COUNT(*) as countdeliverd FROM order_product WHERE Status ='Delivered'");
$total_delivered = $stmt_countdelivered->fetch_assoc()['countdeliverd'];

// sum all total sales
$total_saless =  $conn->query("SELECT SUM(Sales) as total_saless FROM sales_report"); // Changed table name here
$total_salee = $total_saless->fetch_assoc()['total_saless'];
// return json response
$response = array ("total_user" => $total_user, 
                   "total_product" => $total_product,
                    "total_order" => $total_order,
                    "total_delivered" => $total_delivered,
                    "total_sales" => $total_salee);
    echo json_encode($response);

    $stmt_count->close();
    $stmt_countorder->close();
    $stmt_countprod->close();
    $total_saless->close();
    }
    $conn->close();
?>