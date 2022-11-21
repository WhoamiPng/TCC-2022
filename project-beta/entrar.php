 <!DOCTYPE html>
 <html lang="pt-br">
 
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/5chan.ico" type="image/x-icon">
    <!-- estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    
    <!-- Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.6.1.js"
    integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
    
    
    <title>Entrar no 5Chan</title>
    
</head>
<body>   
<?php include 'preloader.php'?>
    <?php include 'header.php';?>
        <main class="p-5">
            <h2>Faça Login em sua conta 5Chan</h2>
            <div class="containier">
                <form action="login.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Ex: fivechan@gmail.com" name="user" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Senha:</label>
                        <input type="password" class="form-control" placeholder="Insira sua senha" name="pass" required>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Manter conectado 
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <a href="registrar.php">Não possui cadastro?</a>
            </div>
        </main>
        <footer>
             <?php include 'footer.php';?>
        </footer>
    </body>
    
    </html> 