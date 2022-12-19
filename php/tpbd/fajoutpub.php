<?php
require_once('acces.inc.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4><?php   echo $_SESSION['login'];     ?></h4>
    <h1>Ajout editeur</h1>
    <form action="ajoutpublisher.php" method="get">
        Name: <input type="text" name="name" id="">
        <input type="submit" value="Ajouter">
    </form>
    <hr>
    <a href="logout.php">Se deconnecter</a>
</body>
</html>