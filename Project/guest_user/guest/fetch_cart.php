<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error) {
        die ("COnnection error" . $conn->connect_error);
    }else {
        $email = 'guest';
        $stmt = $conn->query("SELECT COUNT(*) as count_product FROM cart_product WHERE Email = '$email'");
        $count = $stmt->fetch_assoc()['count_product'];
        $response = array("count_cart" => $count);
        echo json_encode($response);
        $stmt->close();
    }
    $conn->close();
?>