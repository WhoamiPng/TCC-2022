<?php
$servername = "sql107.epizy.com";
$username = "epiz_32971968";
$password = base64_decode("RHhJakJYSDFYbTE=");
$dbname = "epiz_32971968_5chan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>