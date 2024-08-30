<?php
//COMANDO while PARA LOOPS

$i=1; //é mais seguro criar a variável que será utilizdaa no while antes da xriação do loop em si (como em Python)
while ($i <=10){
    echo "O valor do índice é $i <br>";
    $i++;
}

$doces=['Torta de limão','Cheesecake de Frutas vermelhas','Apfelstrudel', 'Mousse de Cupuaçu','Sorvete de Pistache'];
echo '<br>'.'<br>';
$i=0;
$contar= count($doces);
echo '<ul>';
while ($i < $contar) {
    // echo $doces[$i].'<br>';
    $doce=$doces[$i];
    echo "<li>$doce</li>";
    $i++;
}
echo '</ul>';
echo '<br>';
echo '<hr>';

//Perfeito para trabalhar com Arrays é o comando foreach
foreach ($doces as $doce) {
    echo "- $doce ".'<br>';
}
echo '<hr>';
$produtos=array(
    [
        "Titulo" => 'Hunter Cleaver', //Eatsrer egg: Bloodborne
        "Marca" => 'Sawgood',
        "Preco" => 32.9
    ],
    [
        "Titulo" => 'Jackhammer',
        "Marca" => 'Tombstone',
        "Preco" => 89.9
    ],
    [
        "Titulo" => 'Chave Inglesa',
        "Marca" => 'Bioshock', //Primeiro Bioshock
        "Preco" => 49.9
    ]
);

// echo $produtos[1]["Titulo"];
foreach ($produtos as $produto) {
    // echo $produto['Titulo'].'<br>';
    echo "O produto: ".$produto['Titulo']." da marca ".$produto['Marca']." custa ".$produto['Preco']." reais."."<br>";
}
echo '<hr>';
//CONDICIONAIS
if (30>20){
    echo "<h1>Verdadeiro</h1>";
}
$x=10;
$y=8;
$soma = $x + $y;
if ($soma >= 20) {
    echo "Valor maior que 20";
}else{
    echo "O valor é menor que 20.";
}
echo '<hr>';
//Condicional para acesso de sistema:
                    //Forma errada
$funcionario='Vitor';
if ($funcionario = 'Roberto'){ //Neste caso o sistema permite o acesso, porque eu estiou reatribuindo o valor de $funcionario
    echo 'Acesso permitido';
}else{
    echo 'Acesso negado.';
}
echo '<br>'."<br>";
                //Forma correta
if ($funcionario == 'Roberto') { //É necessário colocar dois sinais de = para que o sistema verifique se os funcionários são os mesmos
    echo 'Acesso permitido';
}else{
    echo 'Acesso negado.';
}
echo '<br>'."<br>";
                //Condicional cumulativa (log in com usuário e senha)
$user="Robert";
$senha="1234";
if ($user=='Roberto' and $senha==1234) { //Com três igualdades ele não só iguala as variáveis, como ele verifica o TIPO de dado, esta como número inteiro, e na variável como uma string.
    echo "Acesso permitido";
}else{
    echo "Acesso negado";
}
echo '<br>'."<br>";
                //Condicional com Elseif
$media_final=8;
if ($media_final >=7) {
    echo "O aluno está aprovado.";
}elseif ($media_final <=5) {
    echo "O aluno está reprovado";
}else{
    echo "O aluno em recuperação.";
}

echo '<hr>';
                //Verificação de lado dos triângulos
$lado=6;
$lado2=5;
$lado3=3;
if ($lado==$lado2 and $lado2==$lado3) {
    echo 'Otriângulo Equilátero.';
}elseif ($lado != $lado2 and $lado2 != $lado3 and $lado2!=$lado3) { //!= significa diferente, o ! é uma negação em vários códigos de PHP
    echo "O triângulo é Escaleno.";
}else {
    echo 'O triângulo é Isóceles.';
}
?>