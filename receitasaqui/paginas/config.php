<?php
    $dbHost = 'Localhost';
    $dbUsarme = 'root';
    $dbPassword = '';
    $dbName = 'receitasaqui';

    $conexao = new mysqli($dbHost,$dbUsarme,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>