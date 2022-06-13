<?php
// $servername = "localhost";
// $database   = "u344041282_dbtravels";
// $username   = "u344041282_bname";
// $password   = "Fn4G!t6+v^=";

$tbusuario  = "usuario";
$tbcontacto = "contacto";
$tbencuesta = "encuesta";
$tbproducto = "productos";

$database   = "travels";
$username   = "root";
$password   = "root";

$conexion = mysqli_connect($servername, $username, $password, $database, $dbname);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
