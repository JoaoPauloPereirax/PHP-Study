<?php
$nomeDoUsuario=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$listaDeNomes=file_get_contents('lista.txt');
if($nomeDoUsuario){
    $listaDeNomes.="<li>".$nomeDoUsuario."</li>";
    file_put_contents('lista.txt',$listaDeNomes);
    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;   
}