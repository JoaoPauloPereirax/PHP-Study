<?php
$pdo = new PDO('mysql:dbname=test;host=127.0.0.1','root','');
//associa ao banco  de dados
//consultando dados(query)
$sql = $pdo->query('SELECT*FROM usuarios');

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($dados);

//quero saber quantos itens eu tenho
echo "Quantidade de Registros: ".$sql->rowCount();//rowCount = Contagem de linhas