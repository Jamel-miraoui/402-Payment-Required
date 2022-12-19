<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

echo"<h1>unordered list</h1>";

echo "<ul>";
for ($i = 1 ; $i <= 10; $i++) {
    echo " <li> "."7 * ". $i ."=" . 7 * $i  ."</li> ";
}
echo "</ul>";

echo"<h1>table</h1>";

echo '<table border = "1">';
for ($i = 1 ; $i <= 10; $i++) {
    echo "<tr> <th> 7 *".$i." = </th> <th> ". 7 * $i ." </th> <tr>";
}
echo "</table>"
?>