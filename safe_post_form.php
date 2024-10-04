<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com POST de forma segura</title>
    <style type="text/css">
        *{
            background-color: #333;
            color: #2FB208;
        }
        input{
            display: block;
            margin-top:12px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="">Seu nome:</label>
        <input type="text" name="nome">

        <label for="">Seu E-mail:</label>
        <input type="email" name="email">

        <label for="">Sua idade:</label>
        <input type="text" name="idade">

        <input type="submit" name="enviar" value="Cadastrar">
    </form>

    <?php
        if (isset($_POST['enviar'])){
            //print_r($_POST);
            $erros = array();
            //NOME
            if (strlen($_POST['nome']) >=3) {
                $nome=filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS); //https://www.php.net/manual/en/filter.filters.sanitize.php

                //$nome= $_POST['nome'];
            }else{
                $erros[]= "Preencha seu nome completo";
            }
            //EMAIL
            $validateEmail=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); //https://www.php.net/manual/en/filter.filters.validate.php
            if ( !empty($validateEmail) ) {
                //$email = $_POST['email'];
                $email=$validateEmail;
            }else{
                $erros[]="Preencha seu e-mail corretamente";
            }

            if ($_POST['idade'] > 14) {
                $idade=filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);

                //$idade = $_POST['idade'];
            }else{
                $erros[]="Entrada permitida somente  apartir de 15 anos.";
            }
            //IDADE
            if ( !empty($erros)) {
                foreach ($erros as $erro) {
                    echo "$erro <br>";
                }
            }else{
                //CONTINUAMOS O ENVIO DE FOPRMULÁRIO 
                echo "<h2>Informações enviadas</h2>
                        Nome: $nome<br>
                        E-mail: $email<br>
                        Idade: $idade";
            }
        }
        
    
    
    
    
    ?>
    
</body>
</html>