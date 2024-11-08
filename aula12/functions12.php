<?php

$server = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "bancolegal";
$connect = mysqli_connect($server, $userdb, $passdb, $namedb);


function insertUser($connect){          //!empty() --> verifica se está vazio a variável
    if (isset($_POST['cadastrar']) and !empty($_POST['email']) and !empty($_POST['senha'])) {
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $email = mysqli_real_escape_string($connect, $email);
        $senha = sha1($_POST['senha']);
        $query = "INSERT INTO bancolegal.usuarios(nome, email, senha, data_cadastro) VALUES('$nome', '$email', '$senha', NOW() )";
        $execute = mysqli_query($connect, $query);
        if ($execute) {
            echo "Usuário inserido com sucesso!";
        }else{
            echo "Erro ao inserir usuário.";
        } // Close do else
    } //Close if cadastrar
} // Close function insertUser()


function logar($connect){
    if (isset($_POST['logar'])) {
        $erros = array();
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $senha = sha1($_POST['senha']);
        
        if (empty($email) and empty($senha)) {
            $erros[] = 'E-mail ou senha estão incorretos.';
        } // close do if empty email e senha 

        if (empty($erros)) {
            $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
            $action = mysqli_query($connect, $query);
            $result = mysqli_fetch_assoc($action);
            if (!empty($result['email'])) {
                session_start();
                $_SESSION['email'] = $result['email'];
                $_SESSION['nome'] = $result['nome'];
                $_SESSION['ativa'] = true;
                header("location: admin.php"); //função que leva para outro arquivo
            }else{
                echo "E-mail ou senha incorretos";
            }
        } //close if empty($erros)
    } //close if
} //close function logar() 

?>