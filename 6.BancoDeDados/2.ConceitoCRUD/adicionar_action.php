<?php
require "./config.php";
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
if($name && $email){
    $elemento_adicionado = $pdo->prepare('SELECT*FROM usuarios WHERE email = :email');
    $elemento_adicionado->bindValue(':email',$email);
    $elemento_adicionado->execute();
    if($sql->rowCount()===0){
    $elemento_adicionado = $pdo->prepare('INSERT INTO usuarios (nome,email) VALUES (:name,:email)');
    $elemento_adicionado->bindValue(':name',$name);
    $elemento_adicionado->bindValue(':email',$email);
    $elemento_adicionado->execute();
    header('Location: index.php');
    exit;
    }else{
        header('Location: index.php');
        exit;
    }
}else{
    header("Location: adicionar.php");
}