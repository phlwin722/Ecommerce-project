<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error) {
        die ("Connect error" . $conn->connect_error);
    }else {
        $productcode = $_GET['productcode'];

        $stmt_display = $conn->prepare('SELECT * FROM product_list WHERE Product_code = ?') ;
        $stmt_display->bind_param("s",$productcode);
        $stmt_display->execute();
        $result = $stmt_display->get_result();
        $product = array(); 
        if ($result->num_rows > 0) {
           
            while ($row =  $result->fetch_assoc()) {
                $product [] = $row;
            }
        }

        header ('Content-Type: application/json');
        echo json_encode($product);
        $stmt_display->close();
    }
    $conn->close();
?>