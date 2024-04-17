<?php

function conectar() {
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
    echo "Not Found". mysqli_connect_error();
    } else {
        return $conn;
    }

}

