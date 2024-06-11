<?php
$meuNome = 'João Paulo';
$meuNome.= ' Pereira';
file_put_contents('meuNome.txt',$meuNome);
echo 'Arquivo Criado com sucesso!<br>'.$meuNome;
?>