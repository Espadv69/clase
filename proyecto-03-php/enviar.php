<?php
$destino = "aitorjob69@gmail.com";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$pais = $_POST["pais"];
$curso = $_POST["curso"];

$contenido = "nombre:" . $nombre . "\ncorreo:" . $email . "\npais:" . $pais . "\ntelefono:" . $telefono . "\ncurso:" . $curso;

mail($destino, "informacion", $contenido);
header("location: gracias.html");

