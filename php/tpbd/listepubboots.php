
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
  </header>
  <main>
    <div class="container">
        
   
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
            echo "<h2>Nombre de ligne : ".$result->rowCount()."</h2>";

            echo '<div class="table-responsive">
            <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <caption>Liste des publishers</caption>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
        ';
                      while($ligne = $result->fetch(PDO::FETCH_ASSOC))
            { 
                echo '<tr class="table-primary" >
                <td scope="row">'.$ligne['publisher_id'].'</td>
                <td>'.$ligne['name'].'</td>
                
            </tr>';
               
               
                
            }
            echo '</tbody>
            <tfoot>
                
            </tfoot>
    </table>';
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
     </div>
  
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

                
             
