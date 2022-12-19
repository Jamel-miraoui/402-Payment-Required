<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$file = fopen("donnee.txt", "r");
$ligne = fgets($file);

while (!feof($file)) {
    $tab=explode("|",$ligne);
    echo "prenom : ".$tab[0]."<br>";
    echo "nom : ".$tab[1]."<br>";
    echo "adress: ".$tab[2]."<br>";
    echo "ville : ".$tab[3]."<br>";
    echo "<br>";
    $ligne = fgets($file);
}

fclose($file);
?>