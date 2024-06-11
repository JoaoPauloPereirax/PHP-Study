<?php
echo date("d/m/Y H:i:s");
$data=("2020-08-27");
$data2=strtotime($data);
echo "<br>".date("d / m / Y",$data2);
?>