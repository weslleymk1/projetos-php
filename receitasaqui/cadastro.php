<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome:' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email:' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone:' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Senha:' . $_POST['senha']);
        // print_r('<br>');
        // print_r('Nascimento:' . $_POST['nascimento']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,senha,nascimento) VALUES ('$nome', '$email', '$telefone', '$senha', '$nascimento')");

    header('Location: login.php');

    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - Receitas Aqui</title>
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo/cadastro-login.css">
</head>
<body>
     <?php
        require 'header.html';
        ?>

    <main>
        <div class="box">
            <form action="cadastro.php" method="POST">
                <fieldset>
                    <legend><h1>Registre-se aqui</h1></legend>
                    <br>
                    

                    
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome Completo</label>
                    </div>

                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>

                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>                    

                    <div class="inputBox" id="box-nascimento">
                        <label for="nascimento"><b>Data de Nascimento: </b></label>
                        <input type="date" name="nascimento" id="nascimento" required>
                    </div>

                    <input type="submit" name='submit' id="submit" value="Criar Conta">

                    <p>Já tem uma conta? <a href="login.php">Clique Aqui</a></p>

                   
                    
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>


                    <form class="pure-form">
                        <fieldset>
                            <legend>Confirmação de Senha </legend>

                            <input type="password" placeholder="Senha" id="password" required>
                            
                            <input type="password" placeholder="Confirme Senha" id="confirm_password" required>

                            <button type="submit" class="pure-button pure-button-primary">Confirmar</button>
                        </fieldset>
                    </form>