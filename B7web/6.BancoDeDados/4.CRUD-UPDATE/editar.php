<?php
require 'config.php';
$info=[];
$id=filter_input(INPUT_GET,'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM primeiratabela WHERE id=:id");
    $sql->bindValue(':id',$id);
    $sql->execute();
    if($sql->rowCount()>0){//achou o usuário
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{//não achou o usuário
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}
?>
<h1>Editar Usuário</h1>
<form action="editar_action.php" method="POST">
<input type="hidden" name="id" value="<?= $info['id'];//vai enviar o dado de forma oculta?>">
    <label>
        NOME: <input type="text" name="nome" value="<?=$info['nome']; ?>">
    </label><br><br>
    <label>
        EMAIL: <input type="email" name="email" value="<?=$info['email'];?>">
    </label><br><br>
    <input type="submit" value="Atualizar">
</form>