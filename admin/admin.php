<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativo</title>
</head>
<body>
    <?php if ($_SESSION['ativa']) { ?>
   
    <h1>Bem vindo a área administrativa do site</h1>
    <h3>
        Bem vindo(a) <?php echo $_SESSION['email'];?>.
    </h3>
    <div>
        <a href="sair.php">Sair</a>
    </div>
<?php }else{
    echo "Sem autorização para acessar a página.";
} ?>
</body>
</html>