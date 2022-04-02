<?php
$dbname = 'localhost';
$dbuser = 'root';
$dbpass = '';

try {
    $con = mysqli_connect($dbname,$dbuser,$dbpass,"clinica");
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>