<?php
include "conn.php";

$nome = $_POST['nome'];
$email= $_POST['email'];
$problema = $_POST['problema'];
$mensagem = $_POST['mensagem'];


$sql = "INSERT INTO problemas VALUES ('" . $nome ."','".$email."','" . $problema ."','".$mensagem."');";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($conn->query($sql) === TRUE) {
    header("Location: contato.php");

} else {
    echo "Error: " . $sql. "<br>" . $conn->error;
}
$conn->close();
?>  