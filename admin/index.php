<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        input{
            display: block;
            margin-top:10px;
        }
    </style>
</head>
<body>
    <form action="functions.php" method="post">
        <input type="email" name="email" id="email" placeholder="Seu E-mail" required>
        <input type="password" name="senha" id="senha" placeholder="Sua Senha" required>
        <input type="submit" name="logar" value="Acessar">
    </form>
</body>
</html>