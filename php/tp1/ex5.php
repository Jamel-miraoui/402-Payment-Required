<?php

ini_set("display_errors",1);
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

function Verif_password($pass)
{
    $min=0;
    $maj=0;
    $l= strlen($pass);
    for ($i=0;$i<$l;$i++){
        if (($pass[$i]>"a") and ($pass[$i]<"z")){
            ++$min;
        }
        if (($pass[$i]>"A") and ($pass[$i]<"Z")){
            ++$maj;

        }

    }
    if (($l>7) and ($maj>0) and ($min>0)){
        echo "votre mot de passe est fort !!!";
    }
    else 
    echo "votre mot de passe est faible !!!";
}
Verif_password("Test78vns");
?>