<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="topo">
        <!-- logo -->
        <?php include "layout/logo.php";?>
        <nav>
            <?php require "layout/menu.php";?>
        </nav>
        <!-- A diferença de require e include é que o primeiro faz com que o arquivo procurado
        seja essencial para o funcionamento do código, ou seja, sem ele, o código mostrará um
        ERRO FATAL. No include, ele somente para uma seção da página. -->
    </header>
    <section class="banner">
        <h2>Frase em Destaque</h2>
    </section>
    <main class="principal">
        <div class="infos">
            <h1>Bem vindo ao nosso site</h1>
            <p>Conteúdo exclusivo desta página.</p>
            <img src='rose_dragon.png' alt=''>
        </div>
        <aside class="lateral">
            <h2>Nossos serviços:</h2>
            <ul>
                <li><a href="#">Serviço #1</a></li>
                <li><a href="#">Serviço #2</a></li>
                <li><a href="#">Serviço #3</a></li>
                <li><a href="#">Serviço #4</a></li>
            </ul>
        </aside>
    </main>
    <footer class="rodape">
        <p>Desenvolvido por Lucca Mota Sindeaux - Todos os direitos reservados.</p>
    </footer>
</body>
</html>