<?php
spl_autoload_register(function($class){
    $baseDir = __DIR__."/classes/";
    echo $baseDir."<br>";
    $file = $baseDir.str_replace('\\','/',$class).".php";
    //     \\ no php é uma barra só
    if(file_exists($file)){
        require $file;
    }
});