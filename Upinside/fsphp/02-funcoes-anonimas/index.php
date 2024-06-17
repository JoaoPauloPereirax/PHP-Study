<!DOCTYPE html>
<html lang="pt-br">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>FSPHP: Iniciando Um Projeto</title>
</head>
<body>
       <h1>Funções anônimas</h1>
       <?php
       $myAge = function($year){
              $age = date("Y")-$year;
              return "<p>Você têm {$age} anos!</p>";
       };

       echo $myAge(1996);
       echo $myAge(2003);

       $priceBrl = function($price){
              return number_format($price,2,",",".");
       };

       echo "O projeto custa {$priceBrl(3600)}. Vamos fechar?";

      ?>
</body>
</html>