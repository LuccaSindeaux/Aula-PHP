<?php
//Condicional de verificação simples e grande quantidade de opções 

$aluno='Vitor';
switch ($aluno){
    case 'Roberto':
        $resultado ='Sem notificações'; 
        break;
    case 'Vitor':
        $resultado ='Favor passar na secretaria';
        break;
    case 'Carlos':
        $resultado ='Favor passar na coordenação';
        break;
    default:
        $resultado = 'Aluno não encontrado'; //No switch tem que haver um deafult, ele funciona como um "else" do switch, se nenhum dos casos existirem, haverá um default que será chamado
        break;
    
}
echo "<h3>$resultado</h3>";

echo '<hr>';

$idade=25;
switch ($idade) {
    case $idade >=80:
        $result='Você é idodo';
        break;
    case $idade >=60:
        $result='Voce está na meia idade';
        break;
    case $idade>=40:
        $result='Você já bem adulto';
        break;
    
    case $idade < 18:
        $result='Você é menor de idade';
        break;
    case $idade >=18:
        $result='Você é maior de idade';
        break;
}
echo "<h3>$result</h3>";

echo '<hr>';
//OPERADOR TERNÁRIO - Teste lógico "verdadeiro" "falso"
echo 10>5 ? "Verdadeiro" : "Falso";

echo '<hr>';

$mediafinal=8;
$resultado=$mediafinal >=7 ? "Aprovado":"Reprovado";
echo $resultado;
?>