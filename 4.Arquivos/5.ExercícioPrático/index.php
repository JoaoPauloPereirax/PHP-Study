<?php
session_start();
if($_SESSION['nome']){
    echo "Olá, ".$_SESSION['nome'];
}else{
    header('Location: login.php');
    exit;
}
?>
<br>
<a href="login.php">Sair</a>