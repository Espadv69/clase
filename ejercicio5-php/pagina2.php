<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <h1>SUS DATOS:</h1>
<?php
    echo "<h2>Hola" . " " . $_REQUEST['nombre'] . "</h2><br>";
    if($_POST['radio1'] == "valor1"){
        echo "<h2>No tienes estudios</h2>";
    } else {
        if ($_POST['radio1'] == "valor2") {
        echo "<h2>Tienes estudios primarios</h2>";
        } else if ($_POST['radio1'] == "valor3") {
            echo "<h2>Tienes estudios secundarios</h2>";
        }
    }
?>


</body>
</html>