<?php
//Nunca vou salvar a senha com o nome literal
$senha= '1234';
$hashdefaul=password_hash($senha,PASSWORD_DEFAULT);

echo "Senha Original: ".$senha."<br>";
echo "Hash password default:    ".$hashdefaul."<br>";
//para verificarmos se a senha está correta usamos

/*
$hash="$2y$10$lTIEkciqgeXrH/kgInaZR.MNNG3gdAOe3fhEhpaIb5HzwIFoRPiCi";
if(password_verify($senha,$hash)){
    //o hash é aquele gerado ali em cima
    echo "senha correta!";
}else{
    echo "senha incorreta!";
}*/
