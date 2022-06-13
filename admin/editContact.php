<?php
session_start();
require('../controllers/validaadmin.php');
require('../controllers/conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_update = " SELECT * FROM contacto WHERE idContacto = $id";

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
    $asunto     = $_POST['asunto'];
    $mensaje    = $_POST['mensaje'];
    $id         = $_GET['id'];

    $sql_update = "UPDATE contacto SET nombre ='$nombre', apellido ='$apellido', asunto='$asunto', correo='$correo', pais='$pais', telefono ='$telefono' WHERE idUsuario = '$id'";
    $result = mysqli_query($conexion, $sql_update);

    if (!$result) {
        die('query failed');
    }

    header("location: tbusuario.php");
}

?>