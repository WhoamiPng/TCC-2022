<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  estilos  -->
    <link rel="shortcut icon" href="./imagens/5chan.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Criação do Site </title>

</head>

<body>
    <?php include 'preloader.php' ?>
    <?php include 'header.php' ?>

    <div class="bg-light">
        <div class="container">
            <div class="row h-150px align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4">Como Criamos o site?</h1>
                </div>
                <div class="bg-white p-5 border">
                    <div class="container ">
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-6 order-2 order-lg-1"><i
                                    class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">Tecnologias usadas<h2>
                                        <p class="font-italic text-muted mb-4">Utilizamos as ferramentas abaixo para
                                            construir o nosso site.</p>
                            </div>
                            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="" width="" alt=""
                                    class="img-fluid mb-4 mb-lg-0"></div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 px-5 mx-auto"><img src="imagens/bootstrap.png" width="300px" alt=""
                                    class="img-fluid mb-4 mb-lg-0"></div>
                            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">Bootstrap 5.2<h2>
                                        <p class="font-italic text-muted mb-4">Utilizamos um Framework
                                            chamado Bootstrap 5, que ajudou muito na produtividade, o que demoraria
                                            horas pra fazer, se torna possivel se fazer em 30 minutos, apenas lendo a
                                            documentação no site e aplicando em seu site.</p>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="bg-white p-5 border">
                    <div class="container ">
                        <div class="d-flex justfiry-content-end mb-5">
                            <div class="col-lg-6 order-2 order-lg-1"><i
                                    class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                            </div>
                            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="" width="" alt=""
                                    class="img-fluid mb-4 mb-lg-0"></div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 px-5 mx-auto"><img src="imagens/php.png" width="300px" alt=""
                                    class="img-fluid mb-4 mb-lg-0"></div>
                            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">PHP<h2>
                                        <p class="font-italic text-muted mb-4">Utilizado para o lado do Back-end, parte que o servidor se conecta com o que o usuario quiser.</p>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="bg-white pb-5 border">
                    <div class="container">
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-6 order-2 order-lg-1"><i
                                    class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    
                            </div>
                            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="" width="" alt=""
                                    class="img-fluid mb-4 mb-lg-0"></div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 px-5 mx-auto"><img src="imagens/jquery.png" width="300px" alt=""
                                    class="img-fluid mb-4 mb-lg-0"></div>
                            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">jquery<h2>
                                        <p class="font-italic text-muted mb-4">Framework baseado em Javascript, teve como auxilio a comunicação entre o servidor e as paginas, carregamento automatico e etc</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

<footer class="pt-1">
    <?php include 'footer.php' ?>
    </footer>
</body> 

</html>