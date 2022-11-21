<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  estilos  -->
    <link rel="shortcut icon" href="./imagens/5chan.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <title>Registre-se em 5Chan</title>
</head>

<body>
<?php include 'preloader.php'?>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main class="p-5">
        <h2>Faça seu registro em 5Chan</h2>
        <div class="containier">
            <form action="registro.php" method="post">
                <div class="mb-4 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="users-js" class="form-control" placeholder="Ex: fivechan@gmail.com" maxlength="120" name="user" required>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Senha:</label>
                    <input type="password" id="pass-js" class="form-control" placeholder="Insira sua senha" name="pass" minlength="8" required>
                </div>
                <button id="rgt" type="submit" class="btn btn-primary">Cadastrar-se</button>
            </form>
            <a href="entrar.php ">Ja possui cadastro?</a>
        </div>
    </main>
    <footer>
        <?php
        include 'footer.php'
        ?>
    </footer>
</body>

</html>