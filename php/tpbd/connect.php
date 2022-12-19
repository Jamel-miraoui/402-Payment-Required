<?php 
function connect($host, $db, $user, $password)
{
      try {
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        return new PDO($dsn, $user, $password, $options);
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

