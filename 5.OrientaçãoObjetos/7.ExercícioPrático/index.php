<?php
require './calculadora.php';

$numero=new exoo(5);

$numero->mais(5);

$numero->menos(2);

$numero->vezes(2);

$numero->dividir(2);

echo $numero->getTotal();