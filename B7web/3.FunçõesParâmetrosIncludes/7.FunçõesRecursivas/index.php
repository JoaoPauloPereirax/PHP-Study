<?php
function dividir($n){
    $metade=$n/2;
    echo $metade."<br>";
    if(round($metade)>0){
        //round faz o arredondamento
        dividir($metade);
    }
}
dividir(100);
?>