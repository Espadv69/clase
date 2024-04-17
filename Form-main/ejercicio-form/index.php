<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
<form method="post">

    <h2>Registro</h2>
    <p>Registrar Persona</p>

    <div class="input-wrapper">
        <i class="bi bi-person-square"></i>
        <input type="text" name="nombre" placeholder="Ingrese nombre:">
    </div>

    <div class="input-wrapper">
        <i class="bi bi-hand-index-fill"></i>
        <input type="text" name="apellido" placeholder="Ingrese apellido:">
    </div>

    <div class="input-wrapper">
        <i class="bi bi-envelope-at-fill"></i>
        <input type="email" name="email" placeholder="Ingrese email:">
    </div>

    <div class="input-wrapper">
        <i class="bi bi-signpost-fill"></i>
        <input type="text" name="direccion" placeholder="Ingrese direccion:">
    </div>

    <div class="input-wrapper">
        <i class="bi bi-chat-left-fill"></i><br>
        <textarea name="comentario" cols="50" rows="10"></textarea>
    </div>

    <input class="boton" type="submit" name="enviar" value="enviar"><br>
    <input class="boton" type="reset" value="Reiniciar">

</form>

<?php
include "registrar.php";
?>

</body>
</html>