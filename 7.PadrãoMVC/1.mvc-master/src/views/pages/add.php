<?php $render('header'); ?>

<h2>NOVO USUÁRIO</h2>
<form action="<?=$base;?>/novo" method="post">
    <label>
    Nome: <input type="text" name="nome">
    </label><br><br>
    <label>
        E-mail: <input type="email" name="email">
    </label><br><br>
    <input type="submit" value="Adicionar">
</form>

<?php $render('footer');?>