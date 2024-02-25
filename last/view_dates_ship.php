<?php require_once('header.php'); ?>

  <title>View Orders Details</title>
<div class="page">
    <div class="container">
     <div class="row">
        <div class="col-md-12">
        <?php require_once('customer-sidebar.php'); ?>
        <div class="user-content">
                    <h3><?php echo "Order Details"; ?></h3>
                    <form method="GET" action="">
        <div class="form-group">
            <label for="payment_id">Search by Payment ID:</label>
            <input type="text" class="form-control" id="payment_id" name="payment_id">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
                <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
  <tr>
    <th>Payment ID</th>
    <th>Expected Delivery Date</th>
  </tr>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prints";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search_payment_id = isset($_GET['payment_id']) ? $_GET['payment_id'] : '';

if (!empty($search_payment_id)) {
    $sql = "SELECT payment_id, expected_delivery_date FROM tbl_order_status WHERE payment_id = '$search_payment_id'";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        // Ipakita ang bawat order details sa loob ng table rows
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["payment_id"] . "</td>";
            echo "<td>" . date('F j, Y', strtotime($row["expected_delivery_date"])) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Date not yet posted for this Payment ID.</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>Please enter a Payment ID to search for orders.</td></tr>";
}

$conn->close();
 ?> 

