<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="./imagens/5chan.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!--  scripts  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src=" https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



    <title>5Chan: Dreams come true</title>

</head>


<?php include 'privacidade.php' ?>

<body <?php include 'preloader.php' ?>>

    <header>
        <?php include 'header.php'; ?>
    </header>
    <main class="p-2">
        <!-- Topicos -->
        <div class="container">
            <h1 class="fw-bold text-center">5Chan</h1>
            <p class="fs-5 text-center"> Bem-vindo(a) ao projeto 5Chan,divirta-se no ciberespaço, mas com respeito
                sempre!</p>
        </div>
        <div class="container table-responsive">
            <table id="example" class="table table-striped table-hover border border-success">
                <thead>
                    <tr>
                        <th scope="col">Tópico</th>
                        <th scope="col">Indicação </th>
                        <th scope="col">Total de mensagens</th>
                        <th scope="col">Curtidas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="chat.php?categoria=animes">Animes e mangás</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=videogames">Videogames</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=tecnologia">Tecnologia</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=musica">Música</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=filmes">Filmes e séries</a></td>
                        <td>+10</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=aberto">Aberto</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=politica">Politica</a></td>
                        <td>+12</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=comida">Culinária e comida</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=cursos">Cursos links</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=design">Design geral</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=lgbt">LGBT</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=estudos">Estudos</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=enem">Enem</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=amzds">Amizades aleátorias</a></td>
                        <td>+10</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=conhecimentoab">Conhecimento aberto</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=computadores">Computadores</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=programacao">Programação</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=hacking">Hacking</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="chat.php?categoria=prevencao">Prevenção ao suicídio</a></td>
                        <td>Livre</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        <!-- Topicos -->

    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>