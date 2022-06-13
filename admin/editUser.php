<?php
session_start();
require('../controllers/validaadmin.php');
require('../controllers/conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_update = " SELECT * FROM usuario WHERE idUsuario = $id";

    $result = mysqli_query($conexion, $sql_update);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
    }
}


if (isset($_POST['update'])) {


    $nombre     = $_POST['nombre'];
    $apellido   = $_POST['apellido'];
    $correo     = $_POST['correo'];
    $pais       = $_POST['pais'];
    $telefono   = $_POST['telefono'];
    $usuario    = $_POST['usuario'];
    $tipocliente =$_POST['tipocliente'];
    $contrasena = $_POST['contrasena'];
    $id = $_GET['id'];

    $sql_update = "UPDATE usuario SET nombre ='$nombre', apellido ='$apellido', usuario='$usuario', tipocliente='$tipocliente',correo='$correo', pais='$pais', telefono ='$telefono' WHERE idUsuario = '$id'";
    $result = mysqli_query($conexion, $sql_update);

    if (!$result) {
        die('query failed');
    }

    header("location: tbusuarios.php");
}

?>