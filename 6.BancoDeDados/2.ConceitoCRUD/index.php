<?php
require './config.php';
$lista=[];
$sql=$pdo->query("SELECT*FROM usuarios");
if($sql->rowCount()>0){
    $lista=$sql->fetchAll(PDO::FETCH_ASSOC);
}
/*
Nome do conceito: CRUD
C -> CREATE
R -> READ
U -> UPDATE
D -> DELETE
*/
?>

<button><a href="adicionar.php">ADICIONAR USUÁRIO</a></button>

<table border="1" width="100%" >
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['ID']; ?></td>
            <td><?=$usuario['nome']; ?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="editar.php">[Editar]</a>
                <a href="excluir.php">[Excluir]</a>


            </td>
        </tr>
    <?php endforeach; ?>
</table>