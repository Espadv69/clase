<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="pagina2.php" method="post">

        <label for="">Ingrese su nombre:</label>
        <input type="text" name="nombre"><br>

        <label for="">Sin estudios</label>
        <input type="radio" name="radio1" value="valor1"><br>

        <label for="">Estudios Primarios</label>
        <input type="radio" name="radio1" value="valor2"><br>

        <label for="">Estudios Secundarios</label>
        <input type="radio" name="radio1" value="valor3"><br>


        <input type="submit" name="enviar" value="enviar" class="enviar">
        
    </form>
</body>
</html>