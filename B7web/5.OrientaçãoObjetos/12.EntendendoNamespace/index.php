<?php
require './classe1.php';
require './classe2.php';

use classe1\MinhaClasse as MinhaClasse1;
use classe2\MinhaClasse as MinhaClasse2;

$a = new MinhaClasse1();
/*
Pode ser referenciado como
$a = new classe1\MinhaClasse();
*/ 
$b = new MinhaClasse2();
/*
Pode ser referenciado como
$a = new classe2\MinhaClasse();
*/ 
echo $a->testar().$b->testar();