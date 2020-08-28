<?php
$nomes=file_get_contents('lista.txt');
require('./adicionar.php');
echo "<h1>Lista de Nomes</h1><br><ul>".$nomes."</ul>";
?>