<?php
class matematica {
    public static string $nome = 'João Paulo Pereira';
    public static function somar($x,$y){
        return ($x+$y);
    }
}
//acessando informações de dentro da classe usando variável estática
echo matematica::somar(30,30)."<br>";
echo matematica::$nome;