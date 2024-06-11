<?php
$nome=filter_input(INPUT_GET,'nome',FILTER_SANITIZE_STRING);
$nasc=filter_input(INPUT_GET,"anoNascimento");
$sexo=filter_input(INPUT_GET,"sexo");
echo "$nome é um(a) $sexo e têm ".(date("Y")-$nasc)." anos e idade. ";
?>
<button><a href="./index.php">VOLTAR</a></button>