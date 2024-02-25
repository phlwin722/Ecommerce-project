<!DOCTYPE html>
<html>
<head>
  <title>Input ng Petsa</title>
</head>
<body>

<form method="post" action="save_date.php">
  <label for="date">Pumili ng Petsa:</label>
  <input type="date" id="date" name="date">
  <br>
  
  <label for="payment_id">Payment ID:</label>
  <input type="text" id="payment_id" name="payment_id">
  <br>
  
  <input type="submit" value="I-save">
</form>

<form method="post" action="view_dates.php">
  <input type="submit" value="View Date">
</form>

</body>
</html>
