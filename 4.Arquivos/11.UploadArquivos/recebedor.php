<?php
echo "<pre>";
print_r($_FILES);
//para mover o arquivo para dentro do sistema dentro da pasta arquivos
move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/novoNome');