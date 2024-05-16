<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta charset="utf-8">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apartmani";
$Naziv = $_POST["Naziv"];
$Od = $_POST["Dolazak"];
$Do = $_POST["Odlazak"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO gosti (Naziv, Od, Do)
VALUES ('$Naziv', '$Od', '$Do')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
</html>