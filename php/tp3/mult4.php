<?php 
$answer= $_GET['group']; 
if  ($answer== "1d") {
    echo'1d' ;
    echo $_GET['test1'] ;
    for ($i = 1; $i <= $_GET['max']; $i++) {
        echo $_GET["max"]."*".$i."=".$_GET["max"]*$i."<br>"  ;}}

else if (($answer== "2d") ) {
    echo'2d' ; }
else echo "you need to pick mode"
?>