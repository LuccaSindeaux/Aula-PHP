<?php

// Para se conectar com qualquer banco de dados serão necessáaria quatro informações, que são as informações abaixo: 
$server = "localhost";  //normalmente empresas usam o localhost mesmo
$userdb = "root";  //normalmente servidores online pedem que seja criado um usuário e uma senha. No XAMPP o usuário padrão é root
$passdb = '';
$namedb = 'bancolegal'; //nome do banco de dados que iremos acessar no localhost

$connect = mysqli_connect($server, $userdb, $passdb, $namedb); //a função conecta ao sql e deve ser declarada numa variável

/*BUCANDO DADOS DO BANCO: */
$query = "SELECT * FROM usuarios"; //variável contendo a ação SQL no Query
$action = mysqli_query($connect, $query); //função que pega o query

//$result = mysqli_fetch_assoc($action); //Esta função traz somente um valor do banco de dados


//MYSQLI_NUM - MYSQLI_BOTH - MYSQLI_ASSOC
$results = mysqli_fetch_all($action, MYSQLI_ASSOC); //Função que traz TODOS os valores do banco de acordo com a minha query
// echo '<pre>';
// print_r($results);
?>

<table border='1'>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Observações</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $result) : ?> 
            <tr>
                <td><?php echo $result['nome'];?></td>
                <td><?php echo $result['email'];?></td>
                <td><?php echo $result['obs'];?></td>
                <td><?php $date = date_create($result['data_cadastro']);
                echo date_format($date, "d/m/y");  //formatando para o formato brasileiro?></td>
                
            </tr>
        <?php endforeach ?>
    </tbody>
</table>



<!-- // SEGUNDA PARTE DA AULA: CRIANDO UM FORMULÁRIO QUE INSERIRÁ AO BANCO DE DADOS NO LOCALHOST -->
<form action="" method='post' style="margin-top: 40px;">
    <input type="text" name='nome' placeholder="Seu nome" required>
    <input type="email" name="email" placeholder="Seu E-mail" required>
    <input type="password" name="Senha" placeholder="Sua senha" required>
    <textarea name="obs" id="" cols="30" rows="5" style="display: block; margin:10px 0;" placeholder="Observações"></textarea>
    <input type="submit" name="enviar" value="Cadastrar Usuário">
</form>

<?php
    if (isset($_POST['enviar'])) {
        $nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Limpa o nome de caracteres especiais
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = $_POST['Senha'];
        $obs = filter_input(INPUT_POST, "obs", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //COMANDO que vai ser disparado no Banco de Dados 
        $query = "INSERT INTO usuarios (nome, email, senha, obs, data_cadastro) VALUES ('$nome', '$email', '$senha', '$obs', NOW() )";
        // Usando comandos SQL para adcionar às colunas da tabela os valores digitados entre () de VALUES
        $action =mysqli_query($connect, $query);
        if ($action) {
            echo "<p>Usuário cadastrado com sucesso!</p>";
        }else{
            echo "<p>Erro ao inserir usuário...</p>";
        }
    }


?>