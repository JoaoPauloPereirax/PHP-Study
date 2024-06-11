<h1>Formulário</h1>
<?php
if(isset($_COOKIE['nomeCookie'])){//isset = se estiver setado
    echo '<h2>'.$_COOKIE['nomeCookie'].'</h2>';
}
?>
<a href="./apagar.php">Apagar Cookie</a>
<hr>
<form  method="POST" action="./recebe.php">
    <label>
        Nome <br>
        <input type="text" name="nome">
    </label>
    <br><br>
    <label>
        E-mail <br>
        <input type="email" name="email">
    </label>
    <br><br>
    <label>
        Idade <br>
        <input type="number" name="idade">
    </label>
    <br><br>
    <input type="submit" value="ENVIAR">

</form>