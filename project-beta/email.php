<?php
include "conn.php";
// Create connection
$emails = $_POST['emails'];


$sql = "INSERT INTO email (emails) VALUES ('".$emails."');";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");

} else {
    echo "Error: " . $sql. "<br>" . $conn->error;
}
$conn->close();
?>  