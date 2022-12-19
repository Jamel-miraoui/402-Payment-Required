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
        

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        $conn = new PDO($dsn, $user, $password, $options);
        
        echo "connexion etablie...<br/>";

        $requete = "select * from publishers";
       // echo $requete;
        $result = $conn->query($requete);
        if($result->rowCount())
        {   
            echo "<table border='1'>";
            echo "<h2>Nombre de ligne : ".$result->rowCount()."</h2>";
            while($ligne = $result->fetch(PDO::FETCH_ASSOC))
            { 
                echo "<tr>";
                echo "<td>".$ligne['publisher_id']."</td>";
                echo "<td>".$ligne['name']."</td>";
                echo "<td>"."<a href='delete.php?id=".$ligne['publisher_id']."'>Delete</a>"."</td>";
                echo "<td>"."<a href='detailpub.php?id=".$ligne['publisher_id']."'>Detail</a>"."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "Aucune donnees retrouvees";

        }
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    } 


    

    ?>
    
</body>
</html>