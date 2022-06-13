<?php
session_start();
require('../controllers/validaadmin.php');
require '../controllers/conexion.php';

$nombre     =$_POST['nombre'];
$apellido   =$_POST['apellido'];
$asunto     =$_POST['asunto'];
$telefono   =$_POST['telefono'];
$correo     =$_POST['correo'];
$pais       =$_POST['pais'];
$mensaje    =$_POST['mensaje'];

$query = "INSERT INTO $tbcontacto(nombre, apellido, asunto, telefono, correo,pais, mensaje) 
            VALUES('$nombre','$apellido','$asunto','$telefono','$correo','$pais','$mensaje')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
echo '<script>alert("Mensaje enviado");
window.location="tbcontact.php";</script>';
}
else{
    echo "Error: " . $query . "<br>" . mysqli_error($conexion); 
}

mysqli_close($conexion);

?>