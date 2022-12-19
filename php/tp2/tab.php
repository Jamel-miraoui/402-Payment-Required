<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$jours = array("seance","landi","mardi","mercredi","jedi","vandredi","sammedi");
$emp["lundi"] = ["s1"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s2"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s3"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s4"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s5"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s6"=>["mat"=>"test","prof"=>"test","salle"=>"test",]];
$emp["mardi"] = ["s1"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s2"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s3"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s4"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s5"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s6"=>["mat"=>"test","prof"=>"test","salle"=>"test",]];
$emp["mercredi"] = ["s1"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s2"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s3"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s4"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s5"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s6"=>["mat"=>"test","prof"=>"test","salle"=>"test",]];
$emp["jedi"] = ["s1"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s2"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s3"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s4"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s5"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s6"=>["mat"=>"test","prof"=>"test","salle"=>"test",]];
$emp["vandredi"] = ["s1"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s2"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s3"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s4"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s5"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s6"=>["mat"=>"test","prof"=>"test","salle"=>"test",]];
$emp["sammedi"] = ["s1"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s2"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s3"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s4"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s5"=>["mat"=>"test","prof"=>"test","salle"=>"test",],"s6"=>["mat"=>"test","prof"=>"test","salle"=>"test",]];

echo "<table border=1 cellspacing=1 cellpadding=1> <tr>";
foreach ($jours as  $valeur) {
    echo "<th>".$valeur."</th>";}

echo "<tr></tr>" ;

foreach ($emp as $valeur=>$sean) {
    foreach ($sean as  $det=>$more) {
        foreach ($more as  $ouh=>$t3){
        echo "<td>". $t3["mat"] ."</td>";}}}


echo "<tr></tr>" ;

echo "</table>";

?>