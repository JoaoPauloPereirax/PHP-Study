<!DOCTYPE html>
<html lang="pt-br">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>FSPHP: Iniciando Um Projeto</title>
</head>
<body>
       <h1>Requisições de arquivos externos</h1>
       <?php
       //INCLUDE -- O PROGRAMA CONTINUARÁ RODANDO]
       //include "/header.php";//Não usamos devido as boas práticas
       include __DIR__ . "/header.php";
       //REQUIRE -- O PROGRAMA NÃO PODE CONTINUAR POIS PRECISA DO ARQUIVO
       require __DIR__."/config.php";
       echo "<h1>" . COURSE . "</h1>";
       //Para que o php não faça duas vezes a requisição e chamamos o arquivo novamente, usamos o:
       require_once __DIR__."/config.php";

      ?>
</body>
</html>