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
    <link href="https://fonts.cdnfonts.com/css/cakerolli-trial" rel="stylesheet">
    <nav class="navbar navbar-light" style="background-color: #FAC498;">
        <div class="container">
            <a class="navbar-brand" href="./index.html" style="color:white">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white"> Unidad 1</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/ivette/ivette01.php" style="color: black">Tipos de Duraznoz</a><br>
                            <a class="dropdown-item" href="/ivette/ivette02.php" style="color: black">Beneficios del durazno en la saludd</a><br>
                            <a class="dropdown-item" href="./P3.html" style="color: black">Cultivo de Duraznos</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Unidad 2</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/ivette/P4.php" style="color: black">Curiosidades sobre los Duraznos</a><br>
                            <a class="dropdown-item" href="./P5.html" style="color: black">Duraznos en la cultura Pop</a><br>
                            <a class="dropdown-item" href="./P6.html" style="color: black">Los mayores productores<br> de
                                los duraznos en el mundo</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Unidad 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./P7.html" style="color: black">El impacto productor de durazno en el mundo</a><br>
                            <a class="dropdown-item" href="./P8.html" style="color: black">Duraznos en el arte y la literatura</a><br>
                            <a class="dropdown-item" href="./P9.html" style="color: black">Mi amor por los Duraznos</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1 class="display-4" style="font-family: 'Cakerolli Trial', sans-serif;">¡PEACH LOVE!</h1>
        <p class="lead" >Peach Love: Beautiful, sweet, and full of charm</p>
        <hr class="my-4">
        <p>Ivette Martinez Dorantes</p>
        <p class="lead"></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem; "  ><!-- max-width para que las tarjetas tenga un mismo tamaño-->
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            
            <div class="col-sm-2">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem; ">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem; ">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem; ">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem; ">
                    <div class="card-header" >Header</div>
                    <div class="card-body" >
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <!-- Termina-->
        </div>
    </div>
</body>
</html>
