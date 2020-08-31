<?php
class constructorClass{
    public int $likes = 0;
    public array $comentarios = [];

    public function __construct($var = 0)
    //coloco igual a zero pois se não receber valor será setado 0 a variável(valor padrão)
    /*essa função é executada no momento de criação de um objeto pertencente a classe*/
    {
        $this->likes=$var;
    }
    }
    $variavel = new constructorClass();
    //criar objetos já inicializados
    $variavel2 = new constructorClass(12);

    echo $variavel2->likes;
