<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>

        <div id="div-header">
            <a href="index.php">
                <h1>Receitas Aqui</h1>
            </a>

            <form class="search-container">
                <input type="text" id="search-bar" placeholder="Pesquise receitas...">
                <a href="#"> <img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png" alt="pesquisa"></a>
            </form>
              
            <div id="autenticar">
                <a href="sair.php" id="login-btn" class="sign"><i class="fas fa-sign-in-alt"></i> Sair</a>
            </div>

        </div>


        <nav>
            <ul class="dpcontainer">
                <li><a href="#">Aves</a></li>
                <li><a href="#">Carnes</a></li>
                <li><a href="#">Massas</a></li>
                <li><a href="#">Bolos</a></li>
                <li><a href="#">Doces & Sobremesas</a></li>
                <li><a href='#'>Saladas</a></li>                          
                <li><a href="#">Pães</a></li>
                <li><a href="#">Bebidas</a></li>               
                
                <li class="dropdown"><a href="#">Mais...</a>
                    <ul class='sub-menu'>
                        <li><a href="#">Sopas e Caldos</a></li>
                        <li><a href="#">Arroz e Risotos</a></li>
                        <li><a href="#">Lanches e Salgados</a></li>
                        <li><a href="#">Entradas e petiscos</a></li>
                        <li><a href="#">Molhos e Patês</a></li>
                        <li><a href="#">Especiais</a></li>                        
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>

