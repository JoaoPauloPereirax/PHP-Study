<?php
$nome = "     Joao Paulo     ";
$nomeLimpo = trim($nome);//Função Que tira todos os espaços
echo "Nome com espaços: ".$nome.". ";echo "Número de espaços: ".strlen($nome).".<br>";
echo "Nome sem espaços: ".$nomeLimpo.". ";echo "Número de espaços: ".strlen($nomeLimpo).".<br>";

echo strtolower($nome)."<br>";//deixa o nome todo em minúsculas
echo strtoupper($nome)."<br>";//deixa o nome todo em maiúsculas
$nome1="Joao Paulo";

$nomeAlterado=str_replace('Joao Paulo',"Joao Paulo Pereira",$nome1);
echo $nomeAlterado."<br>";//A função acima procura e substitui

$nome3=substr($nomeAlterado,0,5);
echo $nome3."<br>";//pega os 5 primeiros elementos da string

$posicao=strpos($nomeAlterado,"a");
echo $posicao."<br>";
//Vai mostra na qual posição a letra a aparece pela primeira vez

$nomeMinuscula="joao paulo";
echo ucfirst($nomeMinuscula)."<br>";
//Faz com que a primeira letra fique maiúscula

echo ucwords($nomeMinuscula)."<br>";
//Todos os nomes ficam com a primeira letra maiúscula

$nomes=explode(' ',$nomeAlterado);
print_r($nomes);
//Faz com que a string seja transformada em um array dividido pelos espaços

$numero=12913.12;
echo "<br>".number_format($numero, 1,',','.')."<br>";
//manipula os numeros
?>