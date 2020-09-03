<?php
/*usar o código anterior 
ou 
<?= que é abertura de um arquivo php junto com um echo 
EXEMPLO

<?php
$nome = "João Paulo";
?>

<?php echo $nome; ?>

é o mesmo que 

<?=$nome?>

*/

require "./matematica.php";
echo "resultado: ";
$m = new Matematica();
echo $m->somar(30,100);
//nome de constantes sempre em  caixa alta