<?php
$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
//faz a captação do dado
$idade = filter_input(INPUT_GET,'idade',FILTER_SANITIZE_NUMBER_INT);
//faz a captação do dado
$email = filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL);
//VErificar outros filtros disponíveis
if($nome && $idade){//verificando se os dados foram enviados
    echo "Nome: ".$nome."<br>"."E-mail: ".$email."<br>";
    echo "Idade: ".$idade;
}else{
    header("Location: index.php");
    //ela só pode ser usada se eu não enviei nenhum arquivo
    exit;
    //cancela todo resto do código 
}
?>