<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="verif.php" method="post">
    login: <input type="text" name="log" id=""><br>
    Mot de passe : <input type="password" name="mp" id="">
    <input type="submit" value="login">

    </form>
    <?php
        if(isset($_GET['msg']))
        {
            $msg=$_GET['msg'];
            if($msg = 0)
                   echo "Login ou mot de passe incorrect";
            if($msg = 1)
                   echo "Vous n'etes pas connecte..";
        }

 ?>
</body>
</html>