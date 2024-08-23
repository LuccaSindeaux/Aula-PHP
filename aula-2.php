<?php

$cafe='Pão né tchê';
echo $cafe;
echo '<hr>';

//Arrays simples
$cafeManha = array('Tapioca','Queijo Colonial','Salame','Cafezinho');

// echo $cafeManha; -----> Não é assim que se 'printa' um Array.
print_r($cafeManha);//Mostra a estrutura do array, é um comando mais utilizado para fazer debug do código, para o programador entender o que está de "errado" com a linha. Normalmente o array virá de um Bando de Dados
echo '<hr>';
echo $cafeManha['3'].'<br>'.$cafeManha['2'];
echo '<hr>';
//Array  Asscoaitivo: Onde eu nomeio cada um dos meus índices
$fernando = array(
    'Nome' => 'Grande Fernando', 
    'Predicado'=> 'aquele lá',
    'Associado'=>'amigo do Robeeeeert...'
);
print_r($fernando);
echo '<br>'.'<br>';
echo $fernando['Nome'].'-'.$fernando['Associado'];

//A partir do php 5.4 (estamos no php8) é possível criar arrays só com []
$frutas = ['Laranja', 'Maçã','Abacaxi','Abacate'];
echo '<br>'.'<br>';
echo '<hr>';
echo $frutas['0'].' e '.$frutas['2'];
echo '<hr>';
//Array MultiDimensional: é um array com outros arrays dentro dele
$alunos = array(
    [
        'Nome'=>'Lucca',
        'Curso'=>'ADS',
        'Zona'=>'Centro'
    ],
    [
        'Nome'=>'Robeeert',
        'Curso'=>'Educação Física',
        'Zona'=>'Norte'
    ],
    [
        'Nome'=>'Nina',
        'Curso'=>'Psicologia',
        'Zona'=>'Norte'
    ],
    [
        'Nome'=>'Lisi',
        'Curso'=>['ADS','Design'],
        'Zona'=>'Leste'
    ]
) ;

echo $alunos['1']['Nome'];
echo '<hr>';
echo $alunos['3']['Curso']['1'];
echo '<hr>';

echo '<pre>'; //Muda o display do array, melhor quanto mais dados existirem dentro do array. 
print_r($alunos);
echo '</pre>';

echo '<br>'.'<br>'.'<br>';
echo "<hr>";



#####################################################################################################################################################################################################################
                                                                                     //LOOPS EM PHP
for ($i=0; $i<10 ; $i++){  
    echo "O valor do índice é $i <br>"; //tem de ser com aspas duplas para que o código veja o $i como uma variável e não uma string.
}

echo '<br>'.'<br>'.'<br>';
echo "<hr>";


for ($i=0; $i <=100; $i=$i+10){ //$i=$i+10 é a mesma coisa que escrever $i+=10
    echo "i é $i <br>";

}

echo '<br>'.'<br>'.'<br>';

$senac = ['ADS','PMM','REDES','ADM','TEC'];

for ($i=0; $i<5; $i++){
    echo $senac[$i].'<br>';
}
$contagem = count($senac); //Função que conta os elementos de uma variável
//Então poderia ser escrito da seguinte forma:
    /*
    for ($i=0; $i<$contagem; $i++){
         echo $senac[$i].'<br>';
}
    */

?>