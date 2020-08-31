<?php
class nomeDaClasse{
    //Aqui vão as propriedades e métodos dos objetos
    
    //PROPRIEDADES

    public $curtidas = 0;
    //pública = consigo ter acesso em qualquer lugar fora da classe
    private $comentarios = [];
    /*privada = onde as informações não podem ser acessadas
    usada dentro da classe somente*/
    protected $autor;
    /*protegida = muito similar a privada e vamos ver na sequência dos estudos*/

    //MÉTODOS = basicamente são funções dentro da classe

    public function aumentarlike(){
        $this->curtidas++;    //this = sempre referencia ao próprio item 
    }
}
$postagem1=new nomeDaClasse();
//Agora vamos executar dentro da variável 2x
$postagem1->aumentarlike();
$postagem1->aumentarlike();

echo 'Quantidade de Likes : '.$postagem1->curtidas;