<?php

    include 'conn.php';

            // necessário ter um tabela no banco de dados com o nome de "comentarios":
            // id com  auto increment
            // usuario guardando texto
            // comentario guardando texto

            $usuario = $_POST['usuario'];          
            $comentario = $_POST['comentario'];
            $categoria = $_POST['categoria'];



            if(strlen($_POST['usuario'])) #insere somente se no form foi escrito o nome
            {
                $insert = mysqli_query($conn,"INSERT INTO comentario_$categoria(usuario,comentario) values('".$usuario."','".$comentario."')");
            }
        ?>