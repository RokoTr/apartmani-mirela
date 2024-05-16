<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta charset="utf-8">
<title>Čitanje</title>
<link rel="icon" type="image/x-icon" href="/projekt/slike/favicon.ico">
</head>
<body>
<div class="topnav">
<a href=index.html>Pocetna stranica</a>
<a href=str2.html>Studio apartman</a>
<a href=str3.html>Apartman A2+2</a>
<a href=str4.html>Apartman A2</a>
<a href=unos_podataka.html>Unos podataka</a>
<a href=citanje.php>Čitanje podataka</a>
<a href=promjena_podataka.html>Promjena podataka</a>
<a href=brisanje_podataka.html>Brisanje podataka</a>
</div>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apartmani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Naziv, Od, Do FROM gosti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Naziv: " . $row["Naziv"]. "<br>Datum: " . $row["Od"]. " - " . $row["Do"]. "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
</html>