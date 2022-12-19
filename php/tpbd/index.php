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
   /* ini_set("display_errors",'1');
    error_reporting(E_ALL);
    require_once('config.php');
  //  require_once('Connection.php');
    try {
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $conn = new PDO($dsn, $user, $password, $options);
        
        echo "connexion etablie...";
        
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    } */
   

    ?>
    <h1>Page d'accueil</h1>
    <h3>Utilisateur connecte : <?php echo $_SESSION['login']   ?></h3>
    <ul>
        <li><a href="listepublishers.php">Liste des publishers</a></li>
        <li><a href="fajoutpub.php">Ajout publisher</a></li>
    </ul>
    <hr>
    <a href="logout.php">Se deconnecter</a>
</body>
</html>