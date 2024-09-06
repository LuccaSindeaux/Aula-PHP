<?php
//https://www.php.net/manual/pt_BR/ref.array.php    ------> Para ver as várias funções possíveis com Array

$dados = [
    'nome' => "Trunks",
    "mãe" => "Bulma",
    "pai" => "Vegeta",
    'amigo' => 'Goten',
    'mestre' => 'Gohan',
    'irmã' => 'Bra'
];
foreach ($dados as $dado) {
    echo "$dado - ";
}
//array_keys
$indices = array_keys($dados);
echo '<hr>';
print_r($indices);

echo '<hr>';
//array_pop -----------> Remove o último valor de um array
$last=array_pop($dados);
print_r($dados);
echo '<br>';
echo $last;

//array_shift ----------------> extrai o primeiro elemento de um array
$first=array_shift($dados);
echo '<hr>';
print_r($dados);
echo '<br>'.$first;

//array_sum -------------------> Calcula a soma dos elementos de um array
$valores=[89.5,110,15,5.6,30]; //Se houverem strings dentro de um array, a função sum vai somente somar os valores numérico dentro dela. As strings só serão somadas se forem números dentro delas
echo '<hr>';                   //EXEMPLO $valores=[11,19,"10","20teste"] ele não fará nada com teste, mas somará: 11,19,10,20 mesmo que estejam em strings.
$soma=array_sum($valores);
print_r($valores);
echo '<br>'.$soma;

//in_array --------------> verifica se um valor existe dentro de um array
$cidades=["PoA","Canoas","Esteio","Alvorada"];
echo '<hr>';
$buscar="Canoas";
// echo_in_array($buscar, $cidades);
if (in_array($buscar, $cidades)) {
    echo "A cidade '$buscar' pesquisada encontra-se em nosso cadastro.";
}else{
    echo "Cidade não cadastrada.";
}

//implode -----------> Junta elementos de uma matriz em uma string
$juntar=implode(' - ',$cidades);
echo '<hr>';
echo $juntar;

//explode ----------------> Divide uma sring em strings
$ingredientes='Para preparar um pastel de forno vamos precisar de: farina, óleo, carne moída, queijo';
echo '<hr>';
$explode= explode(':',$ingredientes); //separa as stringes pelo primeiro elemento do parenteses, neste caso :
$receita = explode(',',$explode[1]); //agora está fazendo um array de strings separadas por vírgula (valor do primeiro parênteses)
print_r($receita);

?>