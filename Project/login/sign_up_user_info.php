<?php 
  $servername = "localhost";
  $username = "root";
  $dbpassword = ""; // Changed variable name to avoid conflict with form field
  $dbname = "ecommerce";

  // Create connection 
  $con = new mysqli($servername, $username, $dbpassword, $dbname);

  if ($con->connect_error){
      die("Connection Failed: " . $con->connect_error);
  }else {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $middlename = $_GET['middlename'];
    $contact = $_GET['contact'];
    $Block = $_GET['Block'];
    $Barangay = $_GET['Barangay'];
    $City = $_GET['City'];
    $Province = $_GET['Province'];
    $Email = $_GET['Email'];
    $Password = $_GET['Password'];
    $Secret = $_GET['Secret'];
    $Answer = $_GET['Answer'];
    $Image = 'user-profile-icon-free-vector-removebg-preview (1).png';

    $sql = "SELECT Email FROM user_information WHERE Email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        header ('Content-Type: application/json');
        echo json_encode(array("success" => true));
    } else {
        // Using prepared statement to prevent SQL injection
    $sql = $con->prepare("INSERT INTO user_information (First_name, Last_name, Middle_name, Contact_No, `Block_&_Lot`, Barangay, City, Province, Email, Password, Secret_question, Answer, Image) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
  
        // Bind parameters
        $sql->bind_param("sssssssssssss", $firstname, $lastname, $middlename, $contact, $Block, $Barangay, $City, $Province, $Email,  $Password,  $Secret,  $Answer,$Image);
  
        // Execute query
        if ($sql->execute()){
        // Output success message
        header ('Content-Type: application/json');
        echo json_encode(array("success" => false));
        $sql->close();
        } else {
        // Output error message
        $sql->close();
        }
    }
    $stmt->close();

  }
  $con->close();
?>