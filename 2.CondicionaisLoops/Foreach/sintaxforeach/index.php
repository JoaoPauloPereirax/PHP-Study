<?php
//for each = para cada
//É um laço para dentro do Array
$jogadores=['Jogador 1','Jogador 2','Jogador 3','Jogador 4'];
foreach($jogadores as $jogador){
    echo $jogador;
}
echo '<br>';
//Além do item vou pegar a chave de identificação
foreach($jogadores as $chave => $jogador){
    echo $jogador.' e ====== '.($chave + 1).'<br>';
}