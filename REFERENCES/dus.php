<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error){
        die ("Connection Error:" . $con->connect_error);
    }
    
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        if ($_FILES["image"]["error"] === 4){
            echo '<script>alert("Image does not exist");</script>';
        } else {
            $filename = $_FILES["image"]["name"];
            $filesize = $_FILES["image"]["size"];
            $tmpname = $_FILES["image"]["tmp_name"];

            $validExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $filename);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validExtension)){
                echo '<script>alert("Invalid image extension");</script>';
            } else if ($filesize > 1000000){
                echo '<script>alert("Image size exceeds 1MB");</script>';
            } else {
                $newImagename = uniqid();
                $newImagename .= '.'.$imageExtension;

                move_uploaded_file($tmpname, 'img/' . $newImagename);
                $query = "INSERT INTO tb_upload (name, image) VALUES ('$name', '$newImagename')";
                mysqli_query($con, $query);
                echo '<script>alert("Image uploaded successfully"); document.location.href = "dsu.php";</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off"> 
            <input type="text" name="name">
            <br>
            <input type="file" name="image" accept="image/*">
            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <br>
        <a href="/shopping-cart-oche/dsu.php">data</a>
    </body>
</html>
