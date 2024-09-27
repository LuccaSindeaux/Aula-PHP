<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <style type="text/css">
        input{
            display:block;
            margin-bottom:15px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="">Seu nome:</label>
        <input type="text" name="nome" required>

        <label for="">Seu e-mail</label>
        <input type="email" name="email" required>

        <label for="">Sua idade</label>
        <input type="number" name="idade">

        <input type="submit" name="Enviar">
    </form>

    <?php
        if (isset($_POST["Enviar"])) { //isset() é uma função que verifica se algo existe, tendo de ser combinada com uma condicional, adicionalmente ele ainda faz com que o código só funcione se usar o botão enviar
            if (strlen($_POST["nome"]) >=3) { //strlen() verifica o tamanho da String e trasnforma num valor inteiro
                echo "<h2>"."Nome: ".$_POST['nome']."</h2>"; //$_POST é uma variável uniuversal de php, que pega os valores postados da tag form
            }else{
                echo "Número de caracteres mínimo para nome é insuficiente.";
            }
            if ($_POST["idade"]>=18) {
                echo "<h2>"."Idade: ".$_POST['idade']."</h2>";
            }else{
                echo 'Cadastro permitido somente para maiores de 18 anos.';
            }
            echo "<h2>"."Email: ".$_POST['email']."</h2>";
        }
       

    ?>
    
</body>
</html>