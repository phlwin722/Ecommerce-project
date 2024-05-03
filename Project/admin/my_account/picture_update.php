<?php
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    // File handling
    if (isset($_FILES["image"]) && $_FILES["image"]["name"]) {
        $target_dir = "admin_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Check file size
            if ($_FILES["image"]["size"] > 5000000) {
                echo json_encode(array("success" => false, "message" => "Sorry, your file is too large."));
            } else {
                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    echo json_encode(array("success" => false, "message" => "Sorry, only JPG, JPEG, PNG files are allowed."));
                } else {
                    // If everything is ok, try to upload file
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // Prepare SQL statement
                        $convertImage = basename($target_file);
                        $stmt = $conn->prepare("UPDATE admin SET Image=? WHERE First_name = ?");
                        $stmt->bind_param("ss",  $convertImage, $firstname);

                        // Execute the SQL statement
                        if ($stmt->execute()) {
                            echo json_encode(array("success" => true, "message" => "Product edited successfully."));
                        } else {
                            echo json_encode(array("success" => false, "message" => "Error updating product."));
                        }
                    } else {
                        echo json_encode(array("success" => false, "message" => "Sorry, there was an error uploading your file."));
                    }
                }
            }
        } else {
            echo json_encode(array("success" => false, "message" => "File is not an image."));
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}

$conn->close();
?>
