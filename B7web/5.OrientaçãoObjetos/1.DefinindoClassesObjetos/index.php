<?php
//classes

class nomeClass{
    //basicamente um modelo para um tipo de variável
    public $curtidas = 0;
    public $comentarios = [];
    public $autor;
}

/*Objeto -> */$postagem1 = new nomeClass();
$postagem1->curtidas=3;

$postagem2 = new nomeClass();
//basicamente um modelo para criar a variável

//mostrando os dados
echo 'Postagem 1 : '.$postagem1->curtidas.'<br>';
echo 'Postagem 2 : '.$postagem2->curtidas.'<br>';