<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/projetosphp/receitasaqui/media/favicon.ico" type="image/x-icon">
    <title>Receitas Aqui - Carne de Panela</title>
</head>
<body>
<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {require "../../header-guest.php";} else {require "../../header.php";}     
?>

    <main>          
            <h1>Bolo de Cenoura</h1>

            <section>
                <h2>Ingredientes:</h2>
                <ul>
                    <li>3 xícaras de cenoura ralada</li>
                    <li>3 xícaras de açúcar</li>
                    <li>1 xícara de óleo</li>
                    <li>4 ovos</li>
                    <li>2 xícaras de farinha de trigo</li>
                    <li>1 colher de chá de fermento em pó</li>
                </ul>
            </section>
        
            <section>
                <h2>Modo de preparo:</h2>
                <ol>
                    <li>Pré-aqueça o forno a 180 graus.</li>
                    <li>Em um recipiente, misture a cenoura, o açúcar, o óleo e os ovos.</li>
                    <li>Adicione a farinha de trigo e o fermento em pó e misture até obter uma massa homogênea.</li>
                    <li>Coloque a massa em uma forma untada e enfarinhada.</li>
                    <li>Leve ao forno por cerca de 40 minutos ou até que o bolo esteja dourado e faça o teste do palito.</li>
                </ol>
            </section>
        
            <article>
                <p>O bolo de cenoura é um dos bolos mais amados pelas pessoas de todas as idades. Ele é fácil de fazer, saboroso e saudável, pois contém cenoura, um vegetal rico em vitaminas e minerais.</p>
        
                <P>A origem do bolo de cenoura é incerta, mas acredita-se que ele tenha surgido nos Estados Unidos na década de 30. Naquela época, a cenoura era um vegetal barato e fácil de encontrar, então as pessoas começaram a incluí-la em receitas de bolos para economizar dinheiro. Com o tempo, o bolo de cenoura se tornou um dos bolos mais populares nos Estados Unidos e, hoje, é consumido em todo o mundo.</P>
        
                <p>O bolo de cenoura é feito com ingredientes simples, como cenoura, açúcar, óleo, ovos e farinha de trigo. Ele também geralmente contém fermento em pó, que é responsável por fazer o bolo crescer e ficar fofo. Alguns bolos de cenoura também podem conter nozes ou passas, dando um sabor adicional e crocância.</p>
        
                <p>O bolo de cenoura é fácil de fazer e pode ser feito com ingredientes que você provavelmente já tem em casa. Para fazer o bolo, você precisará misturar os ingredientes secos e úmidos separadamente e, em seguida, misturá-los juntos. A massa resultante é colocada em uma forma untada e enfarinhada e levada ao forno. Depois de cerca de 40 minutos, o bolo estará pronto para ser servido.</p>
        
                <p>Uma das coisas que torna o bolo de cenoura tão popular é que ele é versátil e pode ser servido em uma variedade de ocasiões. Ele é perfeito para servir como sobremesa em jantares de família, como doce de festa de aniversário, ou como lanche da tarde. Ele também é uma ótima opção para levar para um potluck ou compartilhar com amigos e vizinhos.</p>
        
                <p>Em resumo, o bolo de cenoura é um bolo delicioso e versátil que é fácil de fazer e pode ser desfrutado por toda a família. Com sua mistura de ingredientes simples e saudáveis, ele é uma sobremesa perfeita para qualquer ocasião. Experimente fazer um bolo de cenoura em casa hoje!</p>
            </article>
    </main>
</body>
</html>