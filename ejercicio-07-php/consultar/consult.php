<?php 

$conn = mysqli_connect("localhost","root","","prueba") or die(mysqli_error($conn));

$registros = mysqli_query($conn,"SELECT codigo, nombre, email FROM alumnos") or die (mysqli_error($conn));

while($row = mysqli_fetch_array($registros) ) {
    echo"".$row["codigo"]."<br>".$row["nombre"]."<br>".$row["email"];
}

mysqli_close($conn);