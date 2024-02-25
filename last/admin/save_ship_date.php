<?php
// I-connect sa database
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "prints"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = $_POST['date'];
$payment_id = $_POST['payment_id'];


$check_existing_payment_id = "SELECT * FROM tbl_order_status WHERE payment_id = '$payment_id'";
$result11 = $conn->query($check_existing_payment_id);

if ($result11->num_rows == 0) {
    echo '<script>alert("Payment ID does not exist.");</script>';
    echo '<script>window.location.href = "set_ship_date.php";</script>'; 
}   

$check_existing_payment_id = "SELECT * FROM tbl_order WHERE payment_id = '$payment_id'";
$result = $conn->query($check_existing_payment_id);

 if  ($result->num_rows ==0) {
   
    echo '<script>alert("Already set a date for this payment ID.");</script>';
    echo '<script>window.location.href = "set_ship_date.php";</script>'; 
}
else if  ($result11->num_rows > 0) {
   
    echo '<script>alert("Already set a date for this payment ID.");</script>';

    echo '<script>window.location.href = "set_ship_date.php";</script>'; 
}
 else {
    $sql = "INSERT INTO tbl_order_status (expected_delivery_date, payment_id) VALUES ('$date', '$payment_id')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo '<script>alert("Succesfully Set the date when design is done");</script>';
        header("Location: set_ship_date.php");
        exit();
    } else {
        echo "Erro " . $conn->error;
    }
}


$conn->close();
?>