<?php
//copiando um arquivo para a pasta de origem no index
copy('pasta/nomeDoArquivo','nomeDoArquivo');
//renomeando o arquivo
rename('nomeDoArquivo','novoNomeDoArquivo');
//trocando a pasta do arquivo
rename('novoNomeDoArquivo','pasta/novoNomeDoArquivo');
?>