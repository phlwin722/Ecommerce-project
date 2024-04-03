
<?php 
  require('dusdatabase.php');
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecommerce";

  $con = new mysqli($servername, $username, $password, $dbname);

  if ($con->connect_error){
      die ("Connection Error:" . $con->connect_error);
  }
  ?>
<!DOCTYPE html>
<html>
    <body>
        <table>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>image</td>
            </tr>
            <?php $i = 1;
                $row = mysqli_query($con,"SELECT * FROM tb_upload ORDER BY id DESC");
            ?>
            <?php 
            foreach($row as $row): 
            ?>
            <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><img src="img/<?php echo $row['image']; ?>" width="100" height="200" title="<?php echo $row['image']; ?>"></td>
       </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>
