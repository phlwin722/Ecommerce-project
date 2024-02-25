<?php require_once('header.php'); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prints";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Hindi ma-connect: " . $conn->connect_error);
}

if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Verify if the delete_id is valid and perform deletion
    $sql_delete = "DELETE FROM messages WHERE payment_id = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("s", $delete_id);
    $stmt->execute();

    // Example:
    // $sql_delete = "DELETE FROM messages WHERE payment_id = ?";
    // $stmt = $conn->prepare($sql_delete);
    // $stmt->bind_param("s", $delete_id);
    // $stmt->execute();
    // Redirect or show a success message after deletion
    // Example redirect:
    // header("Location: admin_interface.php");
    // exit();
}

// Kuha ng search query mula sa URL
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Default query para sa pagpapakita ng lahat ng data
$sql = "SELECT * FROM messages";

// Kung may hinahanap na specific payment ID
if(!empty($search)) {
    $sql = "SELECT * FROM messages WHERE payment_id = '$search'";
}

$result = $conn->query($sql);
?>

<link rel="stylesheet" href="admin.css">

<section class="content-header">
	<div class="content-header-left">
		<h1>Customer Choice design</h1>
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search by Payment ID">
            <input type="submit" value="Search">
        </form>
	</div>
</section>
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-hover table-striped" >
        <thead class="thead-dark">
        <tr>
            <th>Payment ID</th>
            <th>Message</th>
            <th>Image</th>
            <th>Download</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["payment_id"]."</td><td>" . $row["mess"] . "</td><td><img src='uploads/" . $row["image"] .
             "' height='100'></td><td><a href='dldesign.php?file=" .$row["image"] . "'><button>Download</button></a></td><td>
             <a href='javascript:void(0);' onclick='confirmDelete(".$row["payment_id"].");'><button>Delete</button></a></td></tr>";
        }
        ?>
    </table>
</div>

<script>
function confirmDelete(delete_id) {
    var result = confirm('Are you sure you want to delete this entry?');
    if (result) {
        window.location.href = 'admin_interface.php?delete_id=' + delete_id;
    }
}
</script>

<?php
$conn->close();
?>
