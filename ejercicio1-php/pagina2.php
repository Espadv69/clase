
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo $_REQUEST['nombre'] . "<br>";
if ($_REQUEST['edad'] >= 18) {
    header('location: https://casino.bet365.es/home/es?affiliate=365_01436077&gclid=EAIaIQobChMIxqnszoGhhQMV0mlHAR1vJwbeEAAYASAAEgK4PfD_BwE');
} else {
    header('location: menor.html');
}

?>
</body>
</html>


