<?php
$nome = filter_input(INPUT_GET,'nome');
//faz a captação do dado
$idade = filter_input(INPUT_GET,'idade',FILTER_VALIDATE_EMAIL);
//faz a captação do dado
$email = filter_input(INPUT_GET,'email',FILTER_SANITIZE_NUMBER_INT);
if($nome){//verificando se os dados foram enviados
    echo "Nome: ".$nome."<br>";
    echo "E-mail: ".$email."<br>";
    echo "Idade: ".$idade;
}else{
    header("Location: index.php");
    //ela só pode ser usada se eu não enviei nenhum arquivo
    exit;
    //cancela todo resto do código 
}
?>