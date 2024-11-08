<?php 
session_start();
require "functions12.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de usuários</title>
</head>
<body>
    <h1>Inserir usuário novo</h1>
    <?php if (isset($_SESSION['ativa'] )) { ?>
        
   
    <?php insertUser($connect); ?>
    <form action="" method="post">
        <input type="text" name="nome" id="" placeholder="Seu nome" required>

        <input type="email" name="email" id="" placeholder="Seu e-mail" required>

        <input type="password" name="senha" id="" placeholder='Sua senha' required>

        <input type="submit" name="cadastrar" value="Cadastrar usuário">

    </form>

    <a href="logout.php">SAIR</a>
<?php } //fechar do session?>
</body>
</html>