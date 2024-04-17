<?php 

    $formatos = array('.jpg', '.png', 'gif', '.pdf', '.sql');
    $directorio = 'archivos';

    if(isset($_POST['boton'])) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
        $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));

        if(in_array($ext, $formatos)) {
            if(move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")) {
                
            } else {
                echo "ocurrió un error subiendo el archivo";
            }

        } else {
            echo "La extension del archivo no es la adecuada";
        }
    }



?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>


<div
    class="container"
>
    <h1>SUBIR ARCHIVO</h1>
</div>

<div
    class="container "
>
    <div class="card">

        <div class="card-header">
            Archivos enviados
        </div>

        <div class="card-block">
            <div class="row">
            <?php
                if($dir = opendir($directorio)) {
                    while($archivo = readdir($dir)) {
                        if($archivo != "." && $archivo != "..") {
                            echo "<hr>Archivo:<strong>" . "<i class='bi bi-card-image'></i>" . $archivo . "</strong><br>";
                        }
                        
                    }
                }
            ?>
           
            </div>
        </div>
    </div>

</div>



<div class="formArchivo container">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="archivo" class="form-control-file">Archivo</label>
            <input type="file" class="form-control-file" id="archivo" aria-describedby="fileHelp" name="archivo">
            <small id="fileHelp" class="form-text text-muted">Archivo Permitido</small>
        </div>
        <button type="submit" class="btn btn-primary" name="boton">Subir Archivo</button>
    </form>
</div>






       
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
