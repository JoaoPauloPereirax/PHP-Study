<?php
function somar(int $n1,int $n2,int $n3=0){
    $total=$n1+$n2+$n3;
    return $total;
}
$x=somar(1,3);
$y=somar(12,12,12);
$w=somar($x,$y);
echo $w;