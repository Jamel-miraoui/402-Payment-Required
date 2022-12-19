<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php  echo "Affichaage Date  <br> Nous somme le  ";
   echo date("j, n, Y"); 
   echo" <br> Il est ";
   echo date("H:i:s");
   echo " <br> Bonne apres midi...";
   ini_set(" display_errors", 1);
   error_reporting(E_ALL);
   ?>

</body>
</html>