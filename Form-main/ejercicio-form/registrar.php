<?php

include "conexion.php";

if(isset($_POST["enviar"])){
    if(
    strlen($_POST["nombre"])>= 1 &&
    strlen($_POST["apellido"])>= 1 &&
    strlen($_POST["email"])>= 1 &&
    strlen($_POST["direccion"])>= 1 &&
    strlen($_POST["comentario"])>= 1) {
        $nombre = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $email = trim($_POST["email"]);
        $direccion = trim($_POST["direccion"]);
        $comentario = trim($_POST["comentario"]);
        $fecha = date("y/d/m");
        $consulta = "INSERT INTO datos(nombre,apellido,email,direccion,comentario,fecha)VALUES(
            '$nombre',
            '$apellido',
            '$email',
            '$direccion',
            '$comentario',
            '$fecha'
        )";
        $resultado = mysqli_query($conn, $consulta);

        if($resultado) {
            ?>
            <h3 class="success">SE COMPLETÓ EL REGISTRO</h3>
            <?php
        } else {
            ?>
            <h3 class="error">OCURRIÓ UN ERROR</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">LLENA LOS CAMPOS REQUERIDOS</h3>
        <?php
    }
}

?>