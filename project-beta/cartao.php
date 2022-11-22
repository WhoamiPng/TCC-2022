<?php
include "conn.php";

$nome = $_POST['nome'];
$mes= $_POST['mes'];
$ano = $_POST['ano'];
$numero = $_POST['numero'];
$cvc = $_POST['cvc'];


$sql = "INSERT INTO cartao VALUES ('" . $nome ."','".$mes."','" . $ano ."','".$numero."','".$cvc."');";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($conn->query($sql) === TRUE) {
    header("Location: donate.php");

} else {
    echo "Error: " . $sql. "<br>" . $conn->error;
}
$conn->close();
?>  