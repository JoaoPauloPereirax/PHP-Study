<?php
$nome="João Paulo";
$nomeCompleto=$nome;
//isset é como se perguntasse se está setado faça
//$nomeCompleto.=isset($sobrenome) ? $sobrenome : '';
//A simplificação vem da seguinte forma
$nomeCompleto.= $sobrenome ?? '' ;
echo $nomeCompleto;