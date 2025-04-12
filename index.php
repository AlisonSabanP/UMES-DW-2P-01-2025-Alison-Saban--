<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Examen Parcial II</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h1>Biblioteca</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ingresoModal">
                            Ingresar nuevo libro
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><h4>Inicio</a></h4>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="modal fade" id="ingresoModal" tabindex="-1" aria-labelledby="ingresoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ingresoModalLabel">Ingreso Libros</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="ingresoLibros.php" method="POST">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el nombre del libro" required>
                            </div>
                            <div class="mb-3">
                                <label for="autor" class="form-label">Autor:</label>
                                <input type="text" class="form-control" id="autor" name="autor" placeholder="Ingrese el nombre del Autor" required>
                            </div>
                            <div class="mb-3">
                                <label for="anio" class="form-label">Año:</label>
                                <input type="text" class="form-control" id="anio" name="anio" placeholder="Ingrese el año de la edición:" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="fluid-container">
            <table class= "table">
                <thead class = "thead">
                    <th class = "th">Título</th>
                    <th class = "th">Autor</th>
                    <th class = "th">Año</th>
                </thead>
            

            <?php

                if (file_exists("libros/libros.txt")) {
                    $archivo = fopen("libros/libros.txt", 'r');
                    while (!feof($archivo)) {
                        $linea = fgets($archivo);
                        if (!empty(trim($linea))) {
                            $datos = explode(",", $linea);
                            echo '<tr>';
                            echo '<td>' .$datos[0] . '</td>';
                            echo '<td>' .$datos[1] . '</td>';
                            echo '<td>' .$datos[2] . '</td>';
                            echo '</tr>';
                        }
                    }

                }
    
            ?>

            </table>
   
            

        </div>

        <footer class="footer mt-auto py-3 bg-dark">
            <div class="container-fluid">
                <span class="text-body">
                    Alison Guadalupe Saban Piche
                </span>
            </div>
            <div class="container-fluid">
                <span class="text-body">
                    202460514
                </span>
            </div>
        </footer>
    </body>
</html>