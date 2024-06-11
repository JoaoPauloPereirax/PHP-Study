<?php
//Parâmetros: Valor
function somar($n1,$n2,&$n3){
        $n3+=500;
        return ($n1+$n2);
}
$x=3;
$y=7;
$total=0;
$soma=somar($x,$y,$total);
echo "TOTAL: ".$total."<br>"."SOMA: ".$soma."<br>";
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      