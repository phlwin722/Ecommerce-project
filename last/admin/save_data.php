<?php
// Konektahin sa iyong database
$servername = "localhost";
$username = "root"; // Palitan ng iyong username
$password = ""; // Palitan ng iyong password
$dbname = "prints"; // Palitan ng pangalan ng iyong database

$conn = new mysqli($servername, $username, $password, $dbname);

// Suriin ang koneksyon sa database
if ($conn->connect_error) {
    die("Hindi ma-connect: " . $conn->connect_error);
}

// Kunin ang impormasyon mula sa form
$pay = $_POST['payment_id'];
$message = $_POST['mess'];
$image = $_FILES['image']['name'];

// I-save ang image sa server
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// I-save ang data sa database
$sql = "INSERT INTO messages (payment_id,mess, image) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$pay, $message, $image);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location: admin_interface.php"); // Pumunta sa admin interface pagkatapos ng pag-save
exit();
?>
