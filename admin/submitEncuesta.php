<?php
require ('../controllers/conexion.php');

$nombre         =$_POST['nombre'];
$edad           =$_POST['edad'];
$genero         =$_POST['genero'];
$lugarViaje     =$_POST['lugarViaje'];
$musicaViaje    =$_POST['musicaViaje'];
$ultimoviaje    =$_POST['ultimoViaje'];
$motivoViaje    =$_POST['motivoViaje'];
$lugarAloja     =$_POST['lugarAloja'];
$atencionViaje  =$_POST['atencionViaje'];
$tipoViaje      =$_POST['tipoViaje'];
$tiempoViaje    =$_POST['tiempoViaje'];
$opinion        =$_POST['opinion'];
$medioContacto  =$_POST['medioContacto'];
$resenaSitio    =$_POST['resenaSitio'];
$mejoraServicio =$_POST['mejoraServicio'];

$query = "INSERT INTO $tbencuesta
(nombre,
edad,
genero,
lugarViaje,
musicaViaje,
ultimoviaje,
motivoViaje,
lugarAloja,
atencionViaje,
tipoViaje,
tiempoViaje,
opinion,
medioContacto,
resenaSitio,
mejoraServicio) 
VALUES(
'$nombre',
'$edad',
'$genero',
'$lugarViaje',
'$musicaViaje',
'$ultimoviaje',
'$motivoViaje',
'$lugarAloja',
'$atencionViaje',
'$tipoViaje',
'$tiempoViaje',
'$opinion',
'$medioContacto',
'$resenaSitio',
'$mejoraServicio')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
echo '<script>alert("Encuesta enviado correctamente");
window.location="tbencuesta.php";</script>';
}
else{
    echo "Error: " . $query . "<br>" . mysqli_error($conexion); 
}

mysqli_close($conexion);
?>