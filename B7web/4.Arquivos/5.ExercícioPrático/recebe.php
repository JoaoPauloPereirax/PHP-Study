<?php
session_start();
$name=filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
if($name){
    $_SESSION['nome']=$name;
    header('Location: index.php');
    exit;
}else{
    header('Location: login.php');
    exit;   
}
