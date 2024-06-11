<?php
$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$idade=filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT);
if($nome && $email && $idade){
    //Só se pode setar um cookie antes de exibir dados na tela
    $expiracao=time()+86400*30;//validade de 30 dias
    setcookie('nomeCookie',$nome,$expiracao);
    echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Idade: ".$idade;
}else{
    
}
