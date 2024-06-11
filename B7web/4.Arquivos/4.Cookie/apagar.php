<?php
setcookie('nomeCookie',null,time()-3600);
header('Location: index.php');
exit;
?>