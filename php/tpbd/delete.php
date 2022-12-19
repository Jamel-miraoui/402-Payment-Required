   <?php
    
    ini_set("display_errors",'1');
    error_reporting(E_ALL);
    require_once('config.php');
    $id = $_GET["id"];
    //echo $id;
    //require_once('connect.php');
try {
    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    $conn = new PDO($dsn, $user, $password, $options);

    echo "connexion etablie...<br/>";

    $requete = "delete from publishers where publisher_id=$id";
    // echo $requete;
    $result = $conn->exec($requete);
    if ($result>0) {
       // echo "publisher id : $id a ete supprimer avec succes....";
        header("location:listepublishers.php");
    }
    else{
        echo "pd de suppression..";
    }
}
catch (PDOException $e) 
    {
        die($e->getMessage());
    } 


?>
