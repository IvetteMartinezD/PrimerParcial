<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ivette Martinez Dorantes</title>
    <style>
        
        .row {
            display: flex; /* Poner las cards en una fila */
            justify-content: center;  /* Centramos las cards */
            flex-wrap: wrap; /* Si no caben las cards se pongan en la siguiente fila*/
        }
        .container {
            max-width: 100%; 
            text-align: center; /* Centramos  */
            
        }
        body {
            font-size: 1.75em; /* Tamaño de fuente */
        }
        
    </style>
</head>
<body>
<link href="https://fonts.cdnfonts.com/css/kasitau" rel="stylesheet">
    <nav class="navbar navbar-light" style="background-color: #f8d5c2;">
        <div class="container">
            <a class="navbar-brand" href="./index.html" style="color:white">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white"> Unidad 1</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/ivette/ivette01.php" style="color: black">Tipos de Duraznos</a><br>
                            <a class="dropdown-item" href="/ivette/ivette02.php" style="color: black">Datos</a><br>
                            <a class="dropdown-item" href="/ivette/ivette03.php" style="color: black">Usuarios</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Unidad 2</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/ivette/ivette04.php" style="color: black">Curiosidades sobre los Duraznos</a><br>
                            <a class="dropdown-item" href="/ivette/ivette05.php" style="color: black">Duraznos en la cultura Pop</a><br>
                            <a class="dropdown-item" href="/ivette/ivette06.php" style="color: black">Los mayores productores<br> de
                                los duraznos en el mundo</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Unidad 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/ivette/ivette07.php" style="color: black">El impacto productor de durazno en el mundo</a><br>
                            <a class="dropdown-item" href="/ivette/ivette08.php" style="color: black">Duraznos en el arte y la literatura</a><br>
                            <a class="dropdown-item" href="/ivette/ivette09.php" style="color: black">Mi amor por los Duraznos</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center" style="background-color: white;">
    <h1 class="display-4" style="font-family: 'Kasitau', sans-serif; " >¡PEACH LOVE!</h1>
        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "tduraznos";
        
        $conexion = new mysqli ($servername, $username, $password, $database);
        if ($conexion->connect_error){
            die("Conexion Fallida:" . $conexion->connect_error);
         }
         $sql = "SELECT * FROM tiposdeduraznos";
         $resultado = $conexion->query($sql);
         if($resultado->num_rows>0){
            echo"<table>";
            echo"<tr><th>id</th><th>Nombre</th><th>Origen</th><th>Caracteristicas</th><th>Sabor</th><th>Color</th><th>Peso</th></tr>";
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Origen"] . "</td><td>" . $row[""]
            }
         }
        ?>

        
<h1 class="display-4" style="font-family: 'Kasitau', sans-serif; " >¡Hola!</h1>
            <!-- Termina-->

        </div>
    </div>
</body>
</html>
