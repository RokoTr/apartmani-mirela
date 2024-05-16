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

$sql = "UPDATE gosti SET Od='$Od', Do='$Do' WHERE Naziv='$Naziv'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
</html>