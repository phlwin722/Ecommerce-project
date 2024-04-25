<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);
    if ($conn->connect_error){
        die("Connection error" . $conn->connect_error);
    }else {
        $user_id = $_GET ['q'];

        $stmt_select = $conn->prepare("SELECT * FROM user_information_archieve WHERE ID = ?");
        $stmt_select->bind_param("s",$user_id);
        if ($stmt_select->execute()){
            $result = $stmt_select->get_result();

            while ($row = $result->fetch_assoc()){
                $stmt_insert = $conn->prepare("INSERT INTO user_information (ID, First_name, Last_name, Middle_name, Contact_No,
                                              `Block_&_Lot`, Barangay, City, Province, Email, Password, Image) VALUES 
                                              (?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt_insert->bind_param("ssssssssssss",$row['ID'], $row['First_name'], $row['Last_name'], $row['Middle_name'], $row['Contact_No'],
                                         $row['Block_&_Lot'], $row['Barangay'], $row['City'], $row['Province'], $row['Email'], $row['Password'], $row['Image']);
                    if ($stmt_insert->execute()){
                        $stmt_delete = $conn->prepare("DELETE FROM user_information_archieve WHERE ID = ? ");
                        $stmt_delete->bind_param("s",$user_id);
                        if ($stmt_delete->execute()){
                            header('Content-Type: application/json');
                            echo json_encode(array("success" => true, "message" => "deleted"));
                            $stmt_delete->close();
                        }
                    }
                $stmt_insert->close();
            }
            $stmt_select->close();
        }
    }
    $conn->close();

?>