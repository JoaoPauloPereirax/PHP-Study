<?php
require "./config.php";
$sql=$pdo->query("SELECT * FROM primeiratabela");

if($sql->rowCount()>0){//Verifica se tem algum
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    //coloca dentro de um array
    //PDO::FETCH_ASSOC para fazer as associações de campos
}
?>

<a href="adicionar.php">Adicionar</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): //de $lista pegue cada item ($usuario)?> 
        <tr>
            <td><?= $usuario['id']; ?> </td>
            <td><?= $usuario['nome']; ?> </td>
            <td><?= $usuario['email']; ?></td>
            <td></td>
        </tr>
    <?php endforeach; ?>
</table>