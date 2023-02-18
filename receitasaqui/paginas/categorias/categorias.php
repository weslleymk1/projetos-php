<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/projetosphp/receitasaqui/media/favicon.ico" type="image/x-icon">
    <title>Receitas Aqui - Categorias</title>
</head>
<body>
<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {require "../header-guest.php";} else {require "../header.php";}     
?>

<h1><a href="bolos-e-tortas.php">Bolos e Tortas</a></h1>

</body>
</html>