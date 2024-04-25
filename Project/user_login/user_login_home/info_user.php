<?php  
    session_start();
    $email = $_SESSION['email'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection Error" . $conn->connect_error);
    } else {
        $stmt_userinfo = $conn->prepare("SELECT * FROM user_information WHERE Email = ?");
        $stmt_userinfo->bind_param("s", $email);

        $stmt_userinfo->execute();
        $result = $stmt_userinfo->get_result();

        if ($result->num_rows > 0) {
            // insert data using array
            $info = array();

            while ($row = $result->fetch_assoc()) {
                $info[] = $row;
            }
            header('Content-Type: application/json');
            echo json_encode($info);
        }
        $stmt_userinfo->close();
    }
    $conn->close();
?>