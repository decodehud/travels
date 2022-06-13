<?php
session_start();
require('../controllers/validacliente.php');
require('../controllers/conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_delete = " DELETE FROM productos WHERE idProductos = $id";
    $result = mysqli_query($conexion, $sql_delete);

if(!$result){
    die('query failed');
}

    header("location: ../controllers/pedidoCliente.php");
}
