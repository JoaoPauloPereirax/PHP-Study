<?php
$lista=['Jogador1','Jogador2','Jogador3','Jogador4','Jogador5'];
echo "TOTAL: ".count($lista)."<br>";
//mostra a quantidade de elementos da lista

$ninjas=['Kakashi','Shikamaru','Hinata','Naruto','Sasuke'];
$principais=['Naruto','Hinata'];
$naoPrincipais=array_diff($ninjas,$principais);
print_r($naoPrincipais);
//basimente faz a diferença entre a geral e a secundária

echo "<br>";
$numeros=[10,20,24,34,45,323];
$filtrados=array_filter($numeros,function($item){
    if($item<30){
        return true;
    }else{
        return false;
    }
});
print_r($filtrados);
//pegou os numeros menores que 30

echo "<br>";
$dobrados=array_map(function($item){
    return $item*2;
},$numeros);
print_r($dobrados);
//forma um novo array com o dobro dos valores

echo "<br>";
array_pop($numeros);
print_r($numeros);
//remove o ultimo elemento do seu array

echo "<br>";
array_shift($numeros);
print_r($numeros);
//remove o primeiro elemento do array

echo "<br>";
if(in_array(45,$numeros)){
    echo "existe <br>";
}else{
    echo "não existe <br>";
}
//procura o valor defido neste caso o 45

$pos=array_search(45,$numeros);
echo $pos."<br>";
//procura o valor definido e retorna a posição dele

$numeros2=[1,50,32,88,23,12,0,13];
sort($numeros2);
print_r($numeros2);
//ordena o array de forma crescente

echo "<br>";
rsort($numeros2);
print_r($numeros2);
//ordena o array de forma decrescente

echo "<br>";
$numeros2=[1,50,32,88,23,12,0,13];
asort($numeros2);
print_r($numeros2);
//ordenaos números de forma crescente mas mantendo as chaves

echo "<br>";
$numeros2=[1,50,32,88,23,12,0,13];
arsort($numeros2);
print_r($numeros2);
//ordenaos números de forma decrescente mas mantendo as chaves

echo "<br>";
$nomes=['João','Paulo'];
$nome=implode(' ',$nomes);
echo $nome."<br>";
//faz a função inversa do explode ou seja concatena os nomes tornando uma string
?>