<?php
//Array
$jogadores1=['Jogador 1','Jogador 2','Jogador 3','Jogador 4'];
echo "Player: ".$jogadores1[0]."<br>";
echo "Player: ".$jogadores1[1]."<br>";
echo "Player: ".$jogadores1[2]."<br>";
echo "Player: ".$jogadores1[3]."<br>";

$jogadores2=["Jogador",...$jogadores1];
echo "Player: ".$jogadores2[0]."<br>";
echo "Player: ".$jogadores2[1]."<br>";
echo "Player: ".$jogadores2[2]."<br>";
echo "Player: ".$jogadores2[3]."<br>";
echo "Player: ".$jogadores2[4]."<br>";
print_r($jogadores2);