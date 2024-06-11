<?php
$data="1996-06-16";
function mudancaData (&$dat){
$dat=strtotime($dat);
$sem=date("w",$dat);
return $sem;
}
function transf ($num){
    switch($num){
        case 0:
            $dia = "Domingo";
            break;
        case 1:
            $dia = "Segunda";
            break;
        case 2:
            $dia = "Terça";
            break;
        case 3:
            $dia = "Quarta";
            break;
        case 4:
            $dia = "Quinta";
            break;
        case 5:
            $dia = "Sexta";
            break;
        case 6:
            $dia = "Sábado";
            break;
    }
    return $dia;
}
function transforma($dat){
    $dat=mudancaData($dat);
    $dat=transf($dat);
    return $dat;
}
echo transforma($data);