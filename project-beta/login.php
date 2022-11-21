<?php
include "conn.php";

    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

    $sql = "SELECT id, user, pass FROM users WHERE user='$user' and pass='$pass'";

    $result = $conn->query($sql);
    
      if($result->num_rows == NULL){
        echo "<script>alert('Usuário ou Senha inválido');window.location.href = 'entrar.php';</script>";
      }else{
          // output data of each row

          session_start();
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["user"]. "<br>";

            header("Location: index.php");


            $cookie_id = $row["id"];
            $cookie_user = $row["user"];
            setcookie("id", base64_encode($cookie_id), time() + (86400 * 30), "/");
            setcookie("user", base64_encode($cookie_user), time() + (86400 * 30), "/");
          }
        }
?>
