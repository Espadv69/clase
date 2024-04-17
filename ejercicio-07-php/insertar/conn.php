<?php
$conn = mysqli_connect("localhost","root","","prueba") or die(mysqli_error($conn));

    mysqli_query($conn,"INSERT INTO alumnos(codigo,nombre,email)VALUES(
        '$_REQUEST[codigo]',
        '$_REQUEST[nombre]',
        '$_REQUEST[email]'
    )") or die(mysqli_error($conn));
    
    mysqli_close($conn);
    
    echo"Fue insertado";


?>