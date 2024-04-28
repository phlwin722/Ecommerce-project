<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn -> connect_error){
        die ("COnnection error".$conn->connect_error);
    }else {
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $middlename = $_GET['middlename'];
        $contact = $_GET['contact'];
        $block = $_GET['block'];
        $barangay = $_GET['barangay'];
        $city = $_GET['city'];
        $province = $_GET['province'];
        $email = $_GET['email'];
        $question = $_GET['question'];
        $answer = $_GET['answer'];

        $stmt_update = $conn->prepare("UPDATE user_information SET First_name = ?, Last_name = ?, Middle_name = ?, Contact_No = ?, `Block_&_Lot` = ?, Barangay = ?, City = ?, Province = ?, Email = ?, Secret_question = ?, Answer = ? WHERE Email = ?");
        $stmt_update->bind_param("ssssssssssss", $firstname, $lastname, $middlename, $contact, $block, $barangay, $city, $province, $email, $question, $answer, $email);
        
        if ($stmt_update->execute()) {
            if ($stmt_update->affected_rows > 0) {
                header('Content-Type: application/json');
                echo json_encode(array("success" => true));
            }
        }
        $stmt_update->close();
    }
    $conn->close()
?>