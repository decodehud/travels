<?php
require '../controllers/conexion.php';
session_start();
require('../controllers/validaadmin.php');
// require('../views/nav-login.php');

$nombre     = $_POST['nombre'];
$precio     = $_POST['precio'];
$pais       = $_POST['pais'];
$alojamiento = $_POST['alojamiento'];
$fechaViaje = $_POST['fechaViaje'];
$descripcion = $_POST['descripcion'];
$estado     = $_POST['estado'];

$query = "INSERT INTO $tbproducto(nombre, precio, pais, alojamiento, fechaViaje,descripcion, estado) 
            VALUES('$nombre','$precio','$pais','$alojamiento','$fechaViaje','$descripcion','$estado')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    header("location: tbproduct.php");
    
} else {

    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
