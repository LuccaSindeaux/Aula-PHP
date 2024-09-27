<?php
// Criando funções em PHP

function welcome (){
    //Código da função
    echo 'Bem vindo(a)';
}

welcome();
echo "<hr>";


function bemVindo($nome){
    $frase = "Bem vindo(a), $nome";
    return $frase;
}

echo bemVindo("Lucca");
echo "<br>";
$nome = "Bella Aurora";
$alunos = "Fernando";
echo bemVindo($nome);
echo "<br>";
echo bemVindo($alunos);

echo "<hr>";

function resultadoFinal($nota1,$nota2,$nota3,$aluno = ""){ //a variável aluno com aspas sem valor definido permite que a função funcione mesmo que um nome não seja declarado
    $media = ($nota1 + $nota2 + $nota3) / 3;
    $media = round($media, 2); //Removendo números adicionais de um float
    if ($media >=7) {
        $resultado = "O aluno $aluno está aprovado com média: $media.";
    }elseif ($media <=5) {
        $resultado = "O aluno $aluno está reprovado com média: $media.";
    }else{
        $resultado = "O aluno $aluno está em recuperação com média: $media.";
    }
    return $resultado;
}//end function

echo resultadoFinal(8,7,6.5,'Roberto'); //aprovação
echo "<br>";
echo resultadoFinal(6,4,8,'Nícolas'); //recuperação
echo "<br>";
echo resultadoFinal(5,3,2,'Henrique'); //reprovação


echo "<hr>";

/* Agregando valores numa variável string:
$nome='Lucca';
$nome .=" Sindeaux";     --------------> .= concatena valores
echo $nome */

function listar($itens){
    if (is_array($itens) and !empty($itens)){ //Criei uma condicional que verifica se a minha variável analisada é um array e se for, verifica se ele não está vazio
        $resultado = "<ul>";
        foreach ($itens as $item){
        $resultado .= "<li>$item</li>";
    }
        $resultado .= "</ul>";
    }else{
        $resultado="Sua lista está vazia";
    }
    return $resultado;
}

$livros=['Senhor dos Anéis', 'Filhos do Éden', "Mistborn","As aventuras de Sherlock Holmes"];
$bull='Não é um array';
$void=[];

echo listar($livros);
echo "<br>";
echo listar($bull);
echo "<br>";
echo listar($void);
?>