<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
//  ------------------------------ Connection Data
$hostname = 'localhost';
$database = 'davinci';
$username = 'root'; // Cambiar segun entorno
$password = ''; // Cambiar segun entorno


try {
    $con = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);

} catch (PDOException $e) {
    print "¡Error de conexion!: " . $e->getMessage();
    die();
}

$con->query("SET NAMES UTF8");


?>