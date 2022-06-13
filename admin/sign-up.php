<?php
session_start();
require('../controllers/validaadmin.php');
require '../controllers/conexion.php';

$nombre     =$_POST['nombre'];
$apellido   =$_POST['apellido'];
$correo     =$_POST['correo'];
$pais       =$_POST['pais'];
$telefono   =$_POST['telefono'];
$usuario    =$_POST['usuario'];
$contrasena =$_POST['contrasena'];
$fecha=date('Y-m-d'); //como capturar la fecha del sistema

// declaracion de variable archivos a SUBIR
// $archivos  =$_FILES['file']['name']; 
// $file_tmp  =$_FILES['file']['tmp_name'];
// $route = 'img'.$archivos;

move_uploaded_file($file_tmp,$route);
//$contrasena =hash('sha512',$contrasena);

$query = "INSERT INTO $tbusuario(nombre, apellido, correo, pais, telefono, usuario,fecha, contrasena) 
            VALUES('$nombre','$apellido','$correo', '$pais','$telefono','$usuario','$fecha','$contrasena')";

 //valiando existencia de datos de correo
 $vericacion_correo =mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'" );           

if(mysqli_num_rows($vericacion_correo) >0){
    echo '<script>alert("Este correo ya existe");
    window.location="tbusuarios.php";</script>';

    exit();
}
 //valiando existencia de datos de usuario 
 $vericacion_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'" );           

if(mysqli_num_rows($vericacion_usuario) >0){
    echo '<script>alert("Este usuario ya existe");
    window.location="tbusuarios.php";</script>';

    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
echo '<script>
alert("Usuario registrado");
window.location="tbusuarios.php";
</script>';
}
else{
    echo "Error: " . $query . "<br>" . mysqli_error($conexion); 
}

mysqli_close($conexion)

?>