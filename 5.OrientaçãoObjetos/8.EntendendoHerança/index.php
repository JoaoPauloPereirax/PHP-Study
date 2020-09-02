<?php
require './classes.php';
$foto = new foto(16061996);
$foto->setLikes(12);
$foto->setUrl('www.jp.com.br');
echo "FOTO: #".$foto->getId()." -  ".$foto->getLikes()."likes"." - ".$foto->getUrl();

