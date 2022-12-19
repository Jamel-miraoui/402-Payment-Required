<?php

$car = array("Ferrai"=>["nb"=>10,"prix"=>515000],"Bentley"=>["nb"=>9,"prix"=>700000],"Porche"=>["nb"=>4,"prix"=>360000],"Tesla"=>["nb"=>10,"prix"=>200000]);
$moto = array("BMW"=>30000,"KAWASAKI"=>45000,"SUZUKI"=>60000);

foreach($car as $key=>["nb"=>$nb,"prix"=>$value]){
    echo("$key [$nb] = $value each <br>");
    $resc=$resc+$value*$nb; }

echo("<br>");

foreach($moto as $key=>$value){
    echo("$key  = $value<br>");
    $resm=$resm+$value;}

echo("<br><br>Le somme des voitures est : $resc<br><br>Le somme des motos est : $resm");
?>