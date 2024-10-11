<?php
$user='admin@email.com';
$pass="test";

$usuarios= [
    "admin@email.com" => "test",
    "fe@email.com" => "1234",
    "luke@email.com" => "4567"
];

if (isset($_POST['logar'])) {
    $email=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST,"senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //if ($user==$email and $pass==$senha) {}
    if (array_key_exists($email, $usuarios)) {
        if ($usuarios[$email] == $senha ) {
            //continua login
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['ativa'] = true;
        header("location: admin.php"); //redirecionar para outra página   
        }else{
            echo "Senha Incorreta.";
        }
    }else{
        echo "Email ou Senha incorretos.";
    }
}

// echo "<a href='index.php'>Retornar a página inicial</a>";

/*
//Iniciar sessão
session_start();
//Variáveis de Sessão
$_SESSION['nome'] = "Ricardo";
$_SESSION['email'] = "Ricardo@email.com";
$_SESSION['ativa'] = true;

echo "<a href='admin.php'>Acessar área administrativa</a>";
*/