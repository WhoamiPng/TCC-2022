<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  estilos  -->
  <link rel="shortcut icon" href="./imagens/5chan.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>

  <title>5Chan Contato: Dreams come true</title>
</head>

<body>
  <header>
    <?php include 'preloader.php' ?>
    <?php include 'header.php'; ?>
  </header>
  <main>
    <div class="background">
      <div class="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-left">
              <div class="screen-header-button close"></div>
              <div class="screen-header-button maximize"></div>
              <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>ENTRE EM</span>
                <span>CONTATO</span>
              </div>
              <div class="app-contact">CONTATO 24/7 (11) 93012-8681</div>
            </div>
            <form action="enviar_email.php" method="post">
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <input class="app-form-control" name="nome" placeholder="SEU NOME">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" name="email" placeholder="EMAIL">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" name="problema" placeholder="RELATE O PROBLEMA">
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" name="mensagem" placeholder="MENSAGEM">
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button">CANCELAR</button>
                    <button class="app-form-button">ENVIAR</button>
                  </div>
                </div>
              </div>
          </div>
          </form>
        </div>
        <div class="credits">
          Inspirado em
          <a class="credits-link" href="https://dribbble.com/shots/2666271-Contact" target="_blank">
            <svg class="dribbble" viewBox="0 0 200 200">
              <g stroke="#ffffff" fill="none">
                <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
                <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345"
                  stroke-width="20"></path>
                <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951"
                  stroke-width="20"></path>
                <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103"
                  stroke-width="20"></path>
              </g>
            </svg>
            Kimi
          </a>
        </div>
      </div>
    </div>
    <style>
      *,
      *:before,
      *:after {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      body {
        background: linear-gradient(to right, #ea1d6f 0%, #eb466b 100%);
        font-size: 12px;
      }

      body,
      button,
      input {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        letter-spacing: 1.4px;
      }

      .background {
        display: flex;
        min-height: 100vh;
      }

      .container {
        flex: 0 1 700px;
        margin: auto;
        padding: 10px;
      }

      .screen {
        position: relative;
        background: #3e3e3e;
        border-radius: 15px;
      }

      .screen:after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 20px;
        right: 20px;
        bottom: 0;
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
        z-index: -1;
      }

      .screen-header {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        background: #4d4d4f;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }

      .screen-header-left {
        margin-right: auto;
      }

      .screen-header-button {
        display: inline-block;
        width: 8px;
        height: 8px;
        margin-right: 3px;
        border-radius: 8px;
        background: white;
      }

      .screen-header-button.close {
        background: #ed1c6f;
      }

      .screen-header-button.maximize {
        background: #e8e925;
      }

      .screen-header-button.minimize {
        background: #74c54f;
      }

      .screen-header-right {
        display: flex;
      }

      .screen-header-ellipsis {
        width: 3px;
        height: 3px;
        margin-left: 2px;
        border-radius: 8px;
        background: #999;
      }

      .screen-body {
        display: flex;
      }

      .screen-body-item {
        flex: 1;
        padding: 50px;
      }

      .screen-body-item.left {
        display: flex;
        flex-direction: column;
      }

      .app-title {
        display: flex;
        flex-direction: column;
        position: relative;
        color: #ea1d6f;
        font-size: 26px;
      }

      .app-title:after {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 25px;
        height: 4px;
        background: #ea1d6f;
      }

      .app-contact {
        margin-top: auto;
        font-size: 8px;
        color: #888;
      }

      .app-form-group {
        margin-bottom: 15px;
      }

      .app-form-group.message {
        margin-top: 40px;
      }

      .app-form-group.buttons {
        margin-bottom: 0;
        text-align: right;
      }

      .app-form-control {
        width: 100%;
        padding: 10px 0;
        background: none;
        border: none;
        border-bottom: 1px solid #666;
        color: #ddd;
        font-size: 14px;
        text-transform: uppercase;
        outline: none;
        transition: border-color .2s;
      }

      .app-form-control::placeholder {
        color: #666;
      }

      .app-form-control:focus {
        border-bottom-color: #ddd;
      }

      .app-form-button {
        background: none;
        border: none;
        color: #ea1d6f;
        font-size: 14px;
        cursor: pointer;
        outline: none;
      }

      .app-form-button:hover {
        color: #b9134f;
      }

      .credits {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        color: #ffa4bd;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 16px;
        font-weight: normal;
      }

      .credits-link {
        display: flex;
        align-items: center;
        color: #fff;
        font-weight: bold;
        text-decoration: none;
      }

      .dribbble {
        width: 20px;
        height: 20px;
        margin: 0 5px;
      }

      @media screen and (max-width: 520px) {
        .screen-body {
          flex-direction: column;
        }

        .screen-body-item.left {
          margin-bottom: 30px;
        }

        .app-title {
          flex-direction: row;
        }

        .app-title span {
          margin-right: 12px;
        }

        .app-title:after {
          display: none;
        }
      }

      @media screen and (max-width: 600px) {
        .screen-body {
          padding: 40px;
        }

        .screen-body-item {
          padding: 0;
        }
      }
    </style>
  </main>
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
</body>

</html>