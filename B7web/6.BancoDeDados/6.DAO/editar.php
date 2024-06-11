<?php
require 'config.php';
require './dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$user=false;
$id=filter_input(INPUT_GET,'id');

if($id){
    $user = $usuarioDao->findById($id);
}

if($user === false){
    header("Location: index.php");
    exit;
}else{

}

?>
<h1>Editar Usuário</h1>
<form action="editar_action.php" method="POST">
<input type="hidden" name="id" value="<?= $user->getId();?>">
    <label>
        NOME: <input type="text" name="nome" value="<?=$user->getNome();?>">
    </label><br><br>
    <label>
        EMAIL: <input type="email" name="email" value="<?=$user->getEmail();?>">
    </label><br><br>
    <input type="submit" value="Atualizar">
</form>