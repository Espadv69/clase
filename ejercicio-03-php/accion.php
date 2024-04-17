<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion</title>
</head>
<body>
    Hola
    <?php
    echo htmlspecialchars($_POST['nombre']);
    echo "<br>";
    ?>
    Usted tiene:
    <?php
    echo (int)$_POST['edad'];
    ?> años.
    
</body>
</html>