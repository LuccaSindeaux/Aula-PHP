<?php require "functions12.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu E-mail e senha</title>
</head>
<body>
    <h1>Informe seu E-mail e senha:</h1>
    <?php logar($connect); ?>
    <form action="" method="post">
        <input type="email" name="email" id="" placeholder="Seu e-mail" required >

        <input type="password" name="senha" id="" placeholder="Sua senha" required>

        <input type="submit" name="logar" value="Acessar">

    </form>
</body>
</html>