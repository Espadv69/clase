

<style>
    <?php
    include "css/style.css"
    ?>
</style>

<?php

function conectar() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ficha";
    $conn = mysqli_connect($host, $user, $pass, $db, '3306');
    return $conn;
}

?>