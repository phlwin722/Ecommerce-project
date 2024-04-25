<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error) {
        die ("Connection error: " . $conn->connect_error);
    } else {
        $user_id = $_GET['user_id'];

        // Prepare SELECT statement to fetch user information
        $stmt_select = $conn->prepare("SELECT * FROM user_information WHERE ID = ?");
        $stmt_select->bind_param("s", $user_id);
        
        if ($stmt_select->execute()) {
            $result = $stmt_select->get_result();
            
            // Fetch user information
            while ($row = $result->fetch_assoc()) {
                // Prepare INSERT INTO statement to archive user information
                $stmt_insert = $conn->prepare("INSERT INTO user_information_archieve (ID, First_name, Last_name, Middle_name, 
                                                            Contact_No, `Block_&_Lot`, Barangay, City, Province, Email, Password, Image)
                                                             VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt_insert->bind_param("ssssssssssss", $row['ID'], $row['First_name'], $row['Last_name'], $row['Middle_name'], 
                                $row['Contact_No'], $row['Block_&_Lot'], $row ['Barangay'], $row['City'], $row['Province'], $row['Email'], $row['Password'], $row['Image']);

                
                // Execute INSERT INTO statement to archive user information
                if ($stmt_insert->execute()) {
                    // Prepare DELETE FROM statement to remove user from the original table
                    $stmt_delete = $conn->prepare("DELETE FROM user_information WHERE ID = ?");
                    $stmt_delete->bind_param("s", $user_id);
                    
                    // Execute DELETE FROM statement
                    if ($stmt_delete->execute()) {
                        header('Content-Type: application/json');
                        echo json_encode(array("success" => true, "message" => "success deleted"));
                    }
                    $stmt_delete->close(); // Close DELETE FROM statement
                }
                $stmt_insert->close(); // Close INSERT INTO statement
            }   
        }
        $stmt_select->close(); // Close SELECT statement
    }
    $conn->close(); // Close database connection
?>
