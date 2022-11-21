<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/5chan.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Nosso time</title>
</head>

<body>
    <?php include 'preloader.php' ?>
    <style>
        body {
            font-family: Nunito, sans-serif;
        }

        .responsive-cell-block {
            min-height: 75px;
        }

        .text-blk {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            line-height: 25px;
        }

        .responsive-container-block {
            min-height: 75px;
            height: fit-content;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0px;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
            justify-content: space-evenly;
        }

        .team-head-text {
            font-size: 48px;
            font-weight: 900;
            text-align: center;
        }

        .team-head-text {
            line-height: 50px;
            width: 100%;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 50px;
            margin-left: 0px;
        }

        .container {
            max-width: 1380px;
            margin-top: 60px;
            margin-right: auto;
            margin-bottom: 60px;
            margin-left: auto;
            padding-top: 0px;
            padding-right: 30px;
            padding-bottom: 0px;
            padding-left: 30px;
        }

        .card {
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 30px;
            padding-right: 25px;
            padding-bottom: 30px;
            padding-left: 25px;
        }

        .card-container {
            width: 280px;
            margin-top: 0px;
            margin-right: 10px;
            margin-bottom: 25px;
            margin-left: 10px;
        }

        .name {
            margin-top: 20px;
            margin-right: 0px;
            margin-bottom: 5px;
            margin-left: 0px;
            font-size: 18px;
            font-weight: 800;
        }

        .position {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 10px;
            margin-left: 0px;
        }

        .feature-text {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
            color: rgb(122, 122, 122);
            line-height: 30px;
        }

        .social-icons {
            width: 70px;
            display: flex;
            justify-content: space-between;
        }

        .team-image-wrapper {
            clip-path: circle(50% at 50% 50%);
            width: 130px;
            height: 130px;
        }

        .team-member-image {
            max-width: 100%;
        }

        @media (max-width: 500px) {
            .card-container {
                width: 100%;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 25px;
                margin-left: 0px;
            }
        }
    </style>
    
    <header>
        <?php include 'header.php' ?>
    </header>

    <div class="responsive-container-block container">
        <p class="text-blk team-head-text">
            Nossa equipe de desenvolvimento!
        </p>
        <div class="responsive-container-block">

            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <div class="team-image-wrapper">
                        <img src="imagens/lucas.jpg" class="team-member-image" />
                    </div>
                    <p class="text-blk name">Lucas Briahn
                    </p>
                    <p class="text-blk position">Desenvolvedor Front-end
                    </p>
                    <p class="text-blk feature-text">Olá, meu nome é Lucas, tenho 16 anos, moro em Guarulhos-São Paulo e nesse projeto, eu fiquei com a parte do Front-end e ajudei um pouco com o Back-end.
                    </p>
                    <div class="social-icons">
                        <a href="https://www.twitter.com" target="_blank">
                            <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg" class="twitter-icon" />
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg" class="facebook-icon" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <div class="team-image-wrapper">
                        <img src="imagens/vini.jpg" class="team-member-image" />
                    </div>
                    <p class="text-blk name">Vinicius Souza
                    </p>
                    <p class="text-blk position">Desenvolvedor Back-end
                    </p>
                    <p class="text-blk feature-text">Olá, meu nome é Vinicius, tenho 17 anos, moro em Guarulhos-São Paulo e nesse projeto, eu fiquei com a parte do Back-end e ajudei um pouco com o Front-end.
                    </p>
                    <div class="social-icons">
                        <a href="https://www.twitter.com" target="_blank">
                            <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg" class="twitter-icon" />
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg" class="facebook-icon" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                    <div class="team-image-wrapper">
                        <img src="imagens/stefani.jpg" class="team-member-image" />
                    </div>
                    <p class="text-blk name">Stefani Soares
                    </p>
                    <p class="text-blk position">Auxiliar de conteudo
                    </p>
                    <p class="text-blk feature-text">Olá, meu nome é Stefani, tenho 16 anos, moro em Guarulhos-São Paulo e nesse projeto,eu fiquei encarregada de ajudar a sugerir sugestões de conteudo de páginas.
                    </p>
                    <div class="social-icons">
                        <a href="https://www.twitter.com" target="_blank">
                            <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg" class="twitter-icon" />
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg" class="facebook-icon" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>