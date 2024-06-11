<?php
//Para que aa página possa usar a sessão temos que inicializa-lá
session_start();
//Importando o formulário da pasta
require('./formulario.php');// '../' volta uma pasta atrás
if($_SESSION){
    echo $_SESSION['aviso'];
    $_SESSION['aviso']=null ;
}
?>