<style>
    body {
        height: 100%;
    }

    .nav-item a {
        background-image: linear-gradient(to right,
                #fff,
                #fff 50%,
                #000 0%);
        background-size: 200% 100%;
        background-position: -100%;
        display: inline-block;
        padding: 5px 0;
        position: relative;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.3s ease-in-out;
    }

    .nav-item a:before {
        content: '';
        background: #54b3d6;
        display: block;
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 3px;
        transition: all 0.3s ease-in-out;
    }

    .nav-item a:hover {
        background-position: 0;
    }

    .nav-item a:hover::before {
        width: 100%;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<header class="p-4">
    <nav class="navbar navbar-expand-lg fixed-top"
        style="background-color: #FA8BFF;background-image: linear-gradient(89deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);">
        <div class="container-fluid">
            <a href="index.php"class="navbar-brand p-1"><img src="imagens/4chan.png" width="35" alt="Logo 5Chan"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header" style="background-image: linear-gradient(to right, #233329, #63D471);">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">5Chan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3"
                        style="font-family: sans-serif; font-size:18px; font-weight:100;">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php" target="_blank">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="sobre.php" target="_blank">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="suporte.php" target="_blank">Suporte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="contato.php" target="_blank">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="donate.php" target="_blank">Cafézinho?</a>
                        </li>

                        <button class=" btn btn-outline-success my-2 my-sm-0 ms-2 btn-sm " name="button1"><a
                                style=" text-decoration:none; color:black" href="entrar.php">Login</a></button>
                        <button class=" btn btn-outline-success my-2 my-sm-0 ms-2 btn-sm " name="button2"><a style=" text-decoration:none; color:black;
                            " href="registrar.php">Cadastrar-se</a></button>
                    </ul>
                </div>
                <div class="text-end">
                    <div>
                        <?php
                        if (isset($_COOKIE['user'])) {
                            echo base64_decode($_COOKIE['user']);
                            echo '<button class=" btn btn-outline-success my-2 my-sm-0 ms-2 btn-sm "><a
                            style=" text-decoration:none; color:black" href="sair.php">Sair</a></button>';

                        }
                        ?>
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>