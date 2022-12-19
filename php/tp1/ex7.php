<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);


    $ch = readline("Donner une chaine : ");

    for($i=strlen($ch);$i>=0;$i--){
        $ch2=$ch2 . $ch[$i] ;
    }
    if($ch==$ch2){
        echo("c'est un Palyndrome");
    }
    else{
        echo("c'est pas un palynd");
    }

?>