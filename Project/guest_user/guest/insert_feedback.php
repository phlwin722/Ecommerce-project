<?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecommerce";

                $con = new mysqli($servername, $username, $password, $dbname);

                if ($con->connect_error){
                    die("Connection error" . $con->connect_error);
                }

                // feedback 
                if (isset($_GET["recipient"]) && isset($_GET['message'])){
                    $recipient = mysqli_real_escape_string($con, $_GET['recipient']);
                    $message = mysqli_real_escape_string($con, $_GET['message']);

                    // Prepare and bind statement 
                    $stmt = $con->prepare("INSERT INTO feedback (Email, Description) VALUES (?, ?)");
                    // Use 's' for string data type
                    $stmt->bind_param("ss", $recipient, $message);
                    
                    if ($stmt->execute()){
                      header('Context-Type: application/json');
                      echo json_encode(array("success" => true));
                    }             
              // Close connection
              $con->close();
              }
          ?>    