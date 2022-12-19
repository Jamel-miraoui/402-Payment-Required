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
    <?php
    ini_set("display_errors",'1');
    error_reporting(E_ALL);
    require_once('config.php');
    //require_once('connect.php');
    try {
        $name = $_GET['name'];

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        $conn = new PDO($dsn, $user, $password, $options);
        
        echo "connexion etablie...<br/>";

        $requete = "insert into publishers values(0,'$name')";
       // echo $requete;
        $n = $conn->exec($requete);
        if($n)
        {
            echo "Ajout effectue avec succes...!<br>";
        }
        else
        {
            echo "Pb d'ajout";
        }
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    } 


    

    ?>
    <hr>
    <a href="logout.php">Se deconnecter</a>
</body>
</html>