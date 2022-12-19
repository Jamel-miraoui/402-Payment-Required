<?php

$log = $_POST['log'];
$mp = $_POST['mp'];

ini_set("display_errors",'1');
    error_reporting(E_ALL);
    require_once('config.php');
    //require_once('connect.php');
   
    try {
        

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        $conn = new PDO($dsn, $user, $password, $options);
        
        //echo "connexion etablie...<br/>";

        $requete = "select * from users where log='$log' and mp='$mp'";
        $result = $conn->query($requete);
        if($result->rowCount())
        {   
            session_start();
            $_SESSION['login']=$log;
            header("location:index.php");
        }
        else
        {
            header("location:login.php?msg=0");
        }
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    } 
