<?php


$servername = "localhost";
                    $username = "root";
                    $dbpassword = ""; // Changed variable name to avoid conflict with form field
                    $dbname = "testing";

                    // Create connection 
                    $mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
if($mysqli->connect_error) {
  exit('Could not connect');
}

else{
    $sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
FROM customer WHERE customerid = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $name . "</td>";
echo "<th>Address</th>";
echo "<td>" . $adr . "</td>";
echo "<th>City</th>";
echo "<td>" . $city . "</td>";
echo "<th>PostalCode</th>";
echo "<td>" . $pcode . "</td>";
echo "<th>Country</th>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";
}
?>