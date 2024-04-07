<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecommerce";

  // category of products
  $category = "Women\'s Fassion & Accessories";
  $con = new mysqli ($servername, $username, $password, $dbname);

  if ($con->connect_error){
      die("Connection error: ".$con->connect_error);
  }else{
    $sql="SELECT Product_code, Product_name, Price, Category, Image FROM product_list WHERE Category = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s",$category);
    // this execute of program
    $stmt->execute();

    // get result
    $result = $stmt->get_result();
    // fetch on array
    $product_list = array();

    while ($row = $result->fetch_assoc()){
        $product_list [] = $row;
    }
    $stmt->close();
  }
  $con->close();
  
    // Return data in JSON format
  header ('Content-Type: application/json');
  echo json_encode($product_list);
?>

