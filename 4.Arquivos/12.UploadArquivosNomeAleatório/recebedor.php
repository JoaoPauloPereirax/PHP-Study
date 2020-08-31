<?php
echo "<pre>";
print_r($_FILES);
$permitidos=['image/jpeg','image/jpg','image/png'];
if(in_array($_FILES['arquivo']['type'],$permitidos)){
    //gerando um nome aleatório
    $nomeDoArquivo=md5(time().rand(0,1000)).".png";
    //para mover o arquivo para dentro do sistema dentro da pasta arquivos
    move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nomeDoArquivo);
    echo "Arquivo salvo com sucesso!";
}else{
    echo "Arquivo não permitido!";
}
