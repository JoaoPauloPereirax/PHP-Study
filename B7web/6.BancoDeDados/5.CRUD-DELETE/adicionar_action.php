<?php
require 'config.php';
$nome=filter_input(INPUT_POST,'nome');
$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

if($nome && $email){
    $sql = $pdo->prepare("SELECT*FROM primeiratabela WHERE email=:email");
    //da tabela primeira lista selecionamos todos os dados q contenham este email
    $sql->bindValue(':email',$email);
    $sql->execute();

    if($sql->rowCount()==0){//verificamos se há algum registro com aquele email
        //agora vamos executar a inserção ma tabela
        $sql = $pdo->prepare("INSERT INTO primeiratabela (nome,email) VALUES (:nome, :email)");
    
        $sql->bindValue(':nome',$nome);//vai ficar salvar somente o valor q você enviar no momento
    
        $sql->bindValue(':email',$email);
    
        //$sql->bindParam(':email',$email);//associada a variável, portanto quando você alterar a variável será também alterado no banco
        //no momento estamos montando a query
        $sql->execute();//agora sim foi executada
        header('Location: index.php');
        exit;
    }else{
        header('Location: adicionar.php');
        exit;
    }

}else{
    header('Location: adicionar.php');
    exit;
}