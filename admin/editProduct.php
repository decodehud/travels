<?php
session_start();
require('../controllers/validaadmin.php');
require('../controllers/conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_update = " SELECT * FROM productos WHERE idProductos = $id";

    $result = mysqli_query($conexion, $sql_update);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
    }
}


if (isset($_POST['update'])) {

    $nombre     = $_POST['nombre'];
    $precio     = $_POST['precio'];
    $pais       = $_POST['pais'];
    $alojamiento = $_POST['alojamiento'];
    $fechaViaje = $_POST['fechaViaje'];
    $descripcion = $_POST['descripcion'];
    $estado     = $_POST['estado'];
    $id = $_GET['id'];

    $sql_update = "UPDATE productos SET nombre ='$nombre', precio ='$precio', pais='$pais', alojamiento='$alojamiento', fechaViaje='$fechaViaje', descripcion ='$descripcion', estado='$estado' WHERE idProductos = '$id'";
    $result = mysqli_query($conexion, $sql_update);

    if (!$result) {
        die('query failed');
    }

    header("location: tbproduct.php");
}

?>