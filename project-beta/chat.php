<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Estilos -->

    <link rel="shortcut icon" href="./imagens/5chan.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">


    <!--  scripts  -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src=" https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <title>5Chan: Dreams come true</title>

    <script>
        $(document).ready(function () {
            $("#form").submit(function (e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function (data) {

                    }
                });

            });
        });
    </script>

</head>

<body>
    <?php
    $categoria = $_GET['categoria'];
    if ($categoria == NULL) {
        header("Location: index.php");
    }

    include "header.php";



    ?>
    <style>
        body {
            background-image: linear-gradient(to right, #233329, #63D471);
        }
    </style>
    <h1 class="d-flex justify-content-center p-5 text-light ">Chat 5Chan</h1>
    <div class="container d-flex justify-content-center p-5">
        <form id="form" action="comment_insert.php" method="post">

            <input type="hidden" name="categoria" value='<?php echo $categoria; ?>'>

            <?php
            include "conn.php";
            if (!isset($_COOKIE['user'])) {
                echo "<label class='form-label text-light' for='usuario'>Nickname</label><br>";
                echo "<input class='form-control ' placeholder='Insira um nickname' type='text' name='usuario' id='usuario' required minlength='8' maxlength='15'><br>";
            } else {
                echo " <input class='form-control' type='hidden' name='usuario' value=" . base64_decode($_COOKIE['user']) . ">";
            }
            ?>

            <label class="form-label text-light" for="comentario">Mensagem</label><br>
            <input class="form-control" placeholder="Insira uma mensagem " type="text" name="comentario" id="comentario"
                required maxlength="100" size="100"><br>

            <input class="btn btn-primary" type="submit" value="Enviar" id="submit" onClick="window.location.reload()">

        </form>
    </div>
    <section id="container d-grid gap-3">
        <h3 class="text-center text-light">Comentarios</h3>
        <hr>
        <section id="comentarios" class="p-5">
            <?php include 'comment_loader.php' ?>
        </section>
    </section>

    <?php include 'footer.php'; ?>
</body>


</html>