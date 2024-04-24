<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if($con->connect_error){
        die("Connection Error:" .$con->connect_error);
    } else {
        $selectedCroduct = $_GET ['selectedCategory'];

        $Stmt = $con->prepare("SELECT * FROM archives_product WHERE Category = ?");
        $Stmt->bind_param("s",$selectedCroduct);
        
        // store the  product on aaray
        $product = array ();
        if ($Stmt->execute()){
            $result = $Stmt->get_result();
            while($row = $result->fetch_assoc()){
                $product [] = $row;
            }
        }
        // close
        $Stmt->close();
        $con->close();
    }
    // sent the resuld as json
    header('Content-Type: application/json');
    echo json_encode($product);
?>