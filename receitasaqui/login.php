<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo/cadastro-login.css">
    <title>Login - Receitas Aqui</title>
</head>
<body>
<?php
        require 'header.html';
        ?>

    <main>
        <div class="box">
            <form action="testLogin.php" method="POST">
                <fieldset>
                    <legend><h1>Faça seu login</h1></legend>
                    <br>
                    
                    <div class="inputBox">
                        <input type="text" name="email" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Email</label>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>                    

                    <input type="submit" name='submit' id="submit" value="Entrar">

                    <p>Ainda não tem uma conta? <a href="cadastro.php">Clique Aqui</a></p>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>

