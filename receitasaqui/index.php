<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas Aqui - Página Principal</title>
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        require "header-guest.php";
    } else {
        require "header.php";
    }     
?>

    <main>
        <h1>Bem-vindo ao Meu Site de Receitas</h1>
        <section>
            <h2>Receitas em destaque</h2>
            <article>
                <h3>Bolo de Cenoura</h3>
                <img src="bolo-de-cenoura.jpg" alt="Bolo de Cenoura">
                <p>Esse bolo de cenoura é fácil de fazer e fica incrivelmente fofinho e saboroso.</p>
                <a href="#">Ver receita</a>
            </article>
       
            <article>
                <h3>Lasanha de Carne</h3>
                <img src="lasanha-carne.jpg" alt="Lasanha de Carne">
                <p>Essa lasanha de carne é uma receita tradicional e é uma ótima opção para o jantar da família.</p>
                <a href="#">Ver receita</a>
            </article>

            <article>
                <h3>Feijão Tropeiro</h3>
                <img src="feijao-tropeiro.jpg" alt="Feijão Tropeiro">
                <p>Esse feijão tropeiro é uma receita típica brasileira e é perfeita para aquecer os dias frios.</p>
                <a href="#">Ver receita</a>
            </article>
        </section>
    </main>

    <footer>
        <p>Copyright © 2021 Meu Site de Receitas</p>
    </footer>


    <script src="script/script.js" defer></script>
</body>
</html>
