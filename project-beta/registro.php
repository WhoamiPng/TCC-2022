<?php
include "conn.php";
// Create connection
$user = $_POST['user'];
$pass = md5($_POST['pass']);

$sql = "INSERT INTO users (user, pass ) VALUES ('" . $user ."','".$pass."');";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($conn->query($sql) === TRUE) {
    header("Location: entrar.php");

} else {
    echo "Error: " . $sql. "<br>" . $conn->error;
}
$conn->close();
?>  