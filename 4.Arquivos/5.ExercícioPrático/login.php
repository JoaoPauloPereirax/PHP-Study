<?php
session_start();
$_SESSION['nome']=null;
?>
<form method="POST" action="recebe.php">
    <label>
        Qual é o seu nome? <br>
        <input type="text" name="nome">
    </label>
    <br>
    <input type="submit" value="SALVAR">
</form>