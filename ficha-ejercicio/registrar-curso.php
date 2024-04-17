
<?php
include "conectar.php";
if(isset($_POST["enviar"]))
$conn=conectar();
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$pais = $_POST["pais"];
$curso = $_POST["curso"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];


$insertar = "INSERT INTO datos(nombre, apellido, pais, curso, email, telefono)VALUES(
    '$nombre',
    '$apellido',
    '$pais',
    '$curso',
    '$email',
    '$telefono'
)";

$query = mysqli_query($conn, $insertar);
if($query) {
    header("location: registro.php");
    exit();
}
?>