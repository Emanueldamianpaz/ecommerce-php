<?php

//  ------------------------------ Connection Data
$hostname = 'localhost';
$database = 'davinci';
$username = 'root'; // Cambiar segun entorno
$password = 'despegar'; // Cambiar segun entorno


try {
    $con = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);

} catch (PDOException $e) {
    print "¡Error de conexion!: " . $e->getMessage();
    die();
}

?>