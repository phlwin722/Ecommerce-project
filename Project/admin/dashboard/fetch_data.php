<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the SQL query
$sql = "SELECT DATE(Date) AS sale_date, SUM(Sales) AS total_sales
        FROM sales_report
        GROUP BY sale_date
        ORDER BY sale_date";

$result = $conn->query($sql);
// Check if there are any results
if ($result->num_rows > 0) {
    // Create an array to store the chart data
    $chartData = array();

    // Add data rows
    while ($row = $result->fetch_assoc()) {
        // Convert sales amount to float for compatibility with Google Chart
        $totalSales = (float)$row["total_sales"];
        $chartData[] = [$row["sale_date"], $totalSales];
    }

    // Convert data array to JSON format
    echo json_encode($chartData);

} else {
    echo json_encode([]);
}

// Close database connection
$conn->close();
?>
