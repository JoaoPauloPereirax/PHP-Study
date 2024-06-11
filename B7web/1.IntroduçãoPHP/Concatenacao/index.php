<?php
$nome = "João Paulo";
$sobrenome = "Pereira";
$idade = 27;
echo "Sou $nome e tenho $idade anos...".'Aspas simples não identificam a variavel veja: $nome';
//Outra forma de concatenar
$nomeCompleto = " ";
$nomeCompleto .= $nome;
$nomeCompleto .= " ";
$nomeCompleto .= $sobrenome;

echo $nomeCompleto;