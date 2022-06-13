<?php
require '../controllers/conexion.php';

$nombre     =$_POST['nombre'];
$apellido   =$_POST['apellido'];
$correo     =$_POST['correo'];
$pais       =$_POST['pais'];
$telefono   =$_POST['telefono'];
$usuario    =$_POST['usuario'];
$contrasena =$_POST['contrasena'];
//$contrasena =hash('sha512',$contrasena);

$query = "INSERT INTO $tbusuario(nombre, apellido, correo, pais, telefono, usuario, contrasena) 
            VALUES('$nombre','$apellido','$correo', '$pais','$telefono','$usuario','$contrasena')";

 //valiando existencia de datos de correo
 $vericacion_correo =mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'" );           

if(mysqli_num_rows($vericacion_correo) >0){
    echo '<script>alert("Este correo ya existe");
    window.location="../sign-up.php";</script>';

    exit();
}
 //valiando existencia de datos de usuario 
 $vericacion_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'" );           

if(mysqli_num_rows($vericacion_usuario) >0){
    echo '<script>alert("Este usuario ya existe");
    window.location="../sign-up.php";</script>';

    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
echo '<script>
alert("Usuario registrado");
window.location="../sign-in.php";
</script>';
}
else{
    echo "Error: " . $query . "<br>" . mysqli_error($conexion); 
}

mysqli_close($conexion)

?>