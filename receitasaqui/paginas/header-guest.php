<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/projetosphp/receitasaqui/estilo/header-footer.css">
    <link rel="stylesheet" href="http://localhost/projetosphp/receitasaqui/estilo/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

    <header>

        <div id="div-header">
            <a href="http://localhost/projetosphp/receitasaqui/index.php">
                <h1>Receitas Aqui</h1>
            </a>

            <form class="search-container">
                <input type="text" id="search-bar" placeholder="Pesquise receitas...">
            </form>
              
            <div id="autenticar">
                <a href="http://localhost/projetosphp/receitasaqui/paginas/loginb.php" id="login-btn" class="sign"><i class="fas fa-sign-in-alt"></i> Entrar</a>
            </div>

        </div>


        <nav>
            <ul class="dpcontainer">
                <li class="dropdown"><a href="http://localhost/projetosphp/receitasaqui/paginas/categorias/categorias.php">Categorias: </a>
                    <ul class='sub-menu'>
                        <li><a href="#">Doces & Sobremesas</a></li>
                        <li><a href="#">Sopas e Caldos</a></li>
                        <li><a href="#">Arroz e Risotos</a></li>
                        <li><a href="#">Lanches e Salgados</a></li>
                        <li><a href="#">Entradas e petiscos</a></li>
                        <li><a href="#">Molhos e Patês</a></li>
                        <li><a href="#">Especiais</a></li>                        
                    </ul>
                </li>
                <li><a href="#">Aves</a></li>
                <li><a href="http://localhost/projetosphp/receitasaqui/paginas/categorias/carnes.php">Carnes</a></li>
                <li><a href="#">Massas</a></li>
                <li><a href="http://localhost/projetosphp/receitasaqui/paginas/categorias/bolos-e-tortas.php">Bolos</a></li>                
                <li><a href='#'>Saladas</a></li>                          
                <li><a href="#">Pães</a></li>
                <li><a href="#">Bebidas</a></li>
            </ul>
        </nav>
    </header>
    
</body>
</html>