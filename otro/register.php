<?php

include "connection.php";


$conn = conectar();
if(isset($_POST["guardar"])){
$nombre = $_POST['nombre'];
$quest1 = $_POST['quest1'];
$quest2 = $_POST['quest2'];
$quest3 = $_POST['quest3'];
$quest4 = $_POST['quest4'];
$quest5 = $_POST['quest5'];

$insert = "INSERT INTO alumnos(nombre, quest1, quest2, quest3, quest4, quest5)VALUE(
    '$nombre',
    '$quest1',
    '$quest2',
    '$quest3',
    '$quest4',
    '$quest5'
)";

$query = mysqli_query($conn, $insert);

}

if($query) {
    header("location: completed.html");
    exit();
}