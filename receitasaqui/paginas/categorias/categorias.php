<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas Aqui - Categorias</title>
</head>
<body>
<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        require "../../header-guest.php";
    } else {
        require "../../header.php";
    }     
?>

<a href="bolos-e-tortas/bolos-e-tortas.php">Bolos e Tortas</a>

</body>
</html>