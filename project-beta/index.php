<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="./imagens/5chan.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src=" https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>


    <title>5Chan: Dreams come true</title>

</head>
<?php include 'privacidade.php' ?>
<body <?php include 'preloader.php' ?>>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main class="pt-4">
        <!-- Topicos -->
        <div class="container-fluid">
            <h1 class="text-center display-4">5Chan</h1>
            <p class="fs-5 text-center"> Bem-vindo(a) ao projeto 5Chan,divirta-se no ciberespaço, mas com respeito
                sempre!</p>
        </div>
        <div class="container table table-responsive bg-light">
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
        <div class="container p-0 border">
            <div class="bg-light">
                <div class="container">
                    <div class="row h-150px align-items-center">
                        <div class="col-lg-6">
                            <h1 class="display-4">Porque usar o 5Chan?</h1>
                            <p class="lead text-muted mb-0">Veja abaixo os motivos para fazer você usar nosso site. </p>

                        </div>
                        <div class="bg-white">
                            <div class="container ">
                                <div class="row align-items-center mb-5">
                                    <div class="col-lg-6 order-2 order-lg-1"><i
                                            class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                                        <h2 class="font-weight-light">A empresa</h2>
                                        <p class="font-italic text-muted mb-4">Somos a 5Chan, site inspirado no 4Chan,
                                            com base nos conceitos do 4Chan, construímos o 5Chan com um toque mais
                                            moderno, em relação a design e etc.</p><a href="empresa.php"
                                            class="btn btn-light px-5 rounded-pill shadow-sm">Leia Mais</a>
                                    </div>
                                    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                                            src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt=""
                                            class="img-fluid mb-4 mb-lg-0"></div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-5 px-5 mx-auto"><img
                                            src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt=""
                                            class="img-fluid mb-4 mb-lg-0"></div>
                                    <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                                        <h2 class="font-weight-light">Segurança e privacidade</h2>
                                        <p class="font-italic text-muted mb-4">Respeitamos sua privacidade, guardamos seus dados, como senha e nome de usuário em nosso banco de dados seguro, nosso site contêm SSL, o que garante que seus dados estarão sempre criptografados, o que inibe que ataques hackers peguem seus dados que estarão com uma criptografia SHA-256.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white">
                            <div class="container">
                                <div class="row align-items-center mb-5">
                                    <div class="col-lg-6 order-2 order-lg-1"><i
                                            class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                                        <h2 class="font-weight-light">Quais as vantagens de nosso site</h2>
                                        <p class="font-italic text-muted mb-4">Nosso site utiliza as tecnologias mais
                                            recentes e atualizadas, não utilizamos tecnologias desatualizadas como nosso
                                            amigo 4Chan, que tem um design antigo e inadequado para os dias de hoje.
                                    </div>
                                    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                                            src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt=""
                                            class="img-fluid mb-4 mb-lg-0"></div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-5 px-5 mx-auto"><img src="" alt=""
                                            class="img-fluid mb-4 mb-lg-0"></div>
                                    <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                                        <h2 class="font-weight-light">Nossa equipe</h2>
                                        <p class="font-italic text-muted mb-4">Nossa equipe é uma das melhores no ramo de criação de Foruns.
</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-light">
                            <div class="container">
                                <div class="row mb-4">
                                    <div class="col-lg-4">
                                        <h2 class="display-3 font-weight-light">Temos exelentes funcionários</h2>
                                        <p class="font-italic text-muted">Todos os participantes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">

                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="imagens/lucas.jpg" alt=""
                                        width="150px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Lucas Briahn </h5><span
                                        class="small text-uppercase text-muted">Desenvolvedor Front-end</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="imagens/vini.jpg" alt=""
                                        width="150px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Vinicius Souza</h5><span
                                        class="small text-uppercase text-muted">Desenvolvedor Back-end</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="imagens/stefani.jpg" alt=""
                                        width="150px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Stefani Soares</h5><span
                                        class="small text-uppercase text-muted">Design text pages</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="imagens/gabriel.jpg" alt=""
                                        width="150px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0 text-light">Gabriel Moutinho </h5><span
                                        class="small text-uppercase text-muted">Desenvolvedor Full stack </span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </main>

</body>

</html>