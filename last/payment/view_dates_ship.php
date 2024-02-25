<?php require_once('header.php'); ?>

  <title>View Orders</title>



<div class="page">
    <div class="container">
     <div class="row">
        <div class="col-md-12">
        <div class="user-content">
                    <h3><?php echo "Order Details"; ?></h3>
        <table>
  <tr>
    <th>Payment ID</th>
    <th>Expected Delivery Date</th>
  </tr>

<?php
// I-connect sa database
$servername = "localhost";
$username = "root"; // Palitan ito ng iyong username ng database
$password = ""; // Palitan ito ng iyong password ng database
$dbname = "prints"; // Palitan ito ng pangalan ng iyong database

// Lumikha ng connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check ng connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kunin ang mga details ng order na naka-save sa database
$sql = "SELECT payment_id, expected_delivery_date FROM tbl_order_status";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ipakita ang bawat order details sa loob ng table rows
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["payment_id"] . "</td>";
        echo "<td>" . date('F j, Y', strtotime($row["expected_delivery_date"])) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>Walang na-save na order details sa database.</td></tr>";
}

// Isara ang connection sa database
$conn->close();
?>
</table>
        </div>
    </div>
</div>





