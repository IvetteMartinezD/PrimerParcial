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
        ?>

        <div class="container">
            <h3>Aprende más sobre los diferentes tipos de duraznos que existen en el mundo.</h3>
            <style>
                h3{
                    text-align: center;
                    color:black;
                    margin-bottom:20px;
                }

                table{
                    width:100%;
                    border-collapse:collapse;
                    margin-top: 50px;
                    border-radius:50px;  
                    border: 1px solid #f8e3ca;
                }

                th,td{
                    padding:10px;
                    text-align:left;
                    border-bottom:1px solid #f8e3ca;
                }

                tr:nth-child(even){
                    background-color:white;
                    color: black;
                }

                tr:nth-child(odd){
                background-color:#fad1b4;
                color:black;
                }

                td{
                    background: inherit;
                    color:black;
                }
            </style>
            <?php if ($resultado->num_rows >0):?> 
                <table>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Origen</th>
                        <th>Caracteristicas</th>
                        <th>Sabor(1-10)</th>
                        <th>Color</th>
                        <th>Peso(g)</th>

                    </tr>
                    <?php while($fila = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $fila['id']; ?></td>
                            <td><?php echo $fila['Nombre'] ;?></td>
                            <td><?php echo $fila['Origen'];?></td>
                            <td><?php echo $fila['Caracteristicas'];?></td>
                            <td><?php echo $fila['Sabor'];?></td>
                            <td><?php echo $fila['Color'];?></td>
                            <td><?php echo $fila['Peso'];?></td>
                        </tr>
                        <?php endwhile; ?>
                        
                </table>
            <?php else: ?>
                <p>No se encontro los nombres</p>
                <?php endif;?>
            
        </div>
    </div>
            <!-- Termina-->
        </div>
    </div>
</body>
</html>
