<?php
/*
PDO é uma biblioteca que já vem habilitada no php
e é possível conectar os mais diversos tipos de banco
de dados inclusive o MySQL
*/
$pdo = new PDO('mysql:dbname=test;host=127.0.0.1','root','');
//Qual é o tipo de banco de dados => mysql

//Nome da base de dados => dbname=test //pois o banco de dados criado a pouco possui esse nome

//Onde esta nosso banco de dados => host=127.0.0.1 ou localhost

//Usuario => root

//Senha => '' //não tem nada

//====================== >>>>>>>>>>>>>associa ao banco  de dados

//consultando dados(query)

$sql = $pdo->query('SELECT * FROM primeiratabela');

/*
query => é uma consulta que você vai fazer.
Select => Seleciona.
from=> a partir de.
primeiralista => nome do nosso banco de dados.
*/

//$dados = $sql->fetchAll();
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
//fetchAll => pegue todos
//Usando constante estática => PDO::FETCH_ASSOC //deixa de forma organizada

echo '<pre>';

print_r($dados);

//quero saber quantos itens eu tenho
echo "Quantidade de Registros: ".$sql->rowCount();//rowCount = Contagem de linhas