<?php
require './calculadora.php';

$numero=new exoo(50);

$numero->mais(50);

$numero->menos(0);

$numero->vezes(10);

$numero->dividir(1);

echo $numero->getTotal();