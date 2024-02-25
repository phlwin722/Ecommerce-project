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
$payment_id = $_POST['payment_id'];
$message = $_POST['mess'];
$image = $_FILES['image']['name'];

// Suriin kung may existing nang payment_id sa table
$check_existing_payment_id = "SELECT * FROM messages WHERE payment_id = ?";
$stmt_check = $conn->prepare($check_existing_payment_id);
$stmt_check->bind_param("s", $payment_id);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    // Mayroon nang na-upload na imahe para sa payment_id na ito
    echo '<script>alert("You already upload an image for this payment id if you have concern just contact us."); window.location.href = "int.php";</script>';
    exit();
}

// I-save ang image sa server
$target_dir = "admin/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

// Check kung may existing na file para sa payment_id
if ($result->num_rows > 0) {
    echo '<script>
        if(confirm("Really sure?")) {
        
            saveToDatabase();
        } else {
           
            window.location.href = "int.php"; 
        }
    </script>';
} else {
    // Walang existing na file, ituloy ang saving process
    saveToDatabase();
}

function saveToDatabase() {
    global $conn, $payment_id, $message, $image, $target_file;

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO messages (payment_id, mess, image) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $payment_id, $message, $image);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    // Alert message using JavaScript for successful upload
    echo '<script>alert("Image uploaded successfully!"); window.location.href = "int.php";</script>';
}

?>
