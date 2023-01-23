<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Receitas</title>
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
    
    <header>
        <div id="div-header">
            <a href="#">
                <h1>Receitas Aqui</h1>
            </a>

            <form class="search-container">
                <input type="text" id="search-bar" placeholder="Pesquise receitas...">
                <a href="#"> <img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png" alt="pesquisa"></a>
            </form>
            
            <div id="autenticar">
                <a href="login.php" id="login-btn" class="sign"><i class="fas fa-sign-in-alt"></i> Entrar</a>
        </div>

        </div>

        <nav>
            <ul>
                <li><a href="#">Aves</a></li>
                <li><a href="#">Carnes</a></li>
                <li><a href="#">Bolos</a></li>
                <li><a href="#">Massas</a></li>
                <li><a href="#">Doces & Sobremesas</a></li>
                <li><a href="#">Outros</a></li>
            </ul>
            
        </nav>
    </header>
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
