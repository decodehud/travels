<?php
session_start();
require('validacliente.php');

$contar=0;
if(isset($_SESSION['carro']))
{
	if($_SESSION['carro']==false)
	{
		$carro=false; //Dejando vacio el arreglo
	}else
	{
		$contar=count($_SESSION['carro']);
		$carro=$_SESSION['carro'];
	}
}
else
{
	$carro=false; //Dejando vacio el arreglo
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Paquetes</title>
</head>
<body>
	<a href="menucliente.php">Ir al Menu</a><br>
	<h1>Catalogo de Productos</h1>

	
<?php
//Cargar la conexion
require("conexion.php");
//Aqui ya tengo disponible la variable $miconexion

//Ejecutar una instruccion de mysql
$sql="Select * from productos  order by nombre";
$consulta=mysqli_query($conexion,$sql);

//$filas=mysqli_fetch_array($consulta);
//La variable $filas es UN ARREGLO que contiene los datos de la consulta
$totalfilas=mysqli_num_rows($consulta);
echo "<table border='0'>";
echo "<tr>";
echo "<td>&nbsp;</td>";
echo "<td align='right'>Total Productos: ".$totalfilas."</td>";
echo "</tr>";
echo "<tr><td colspan='2'><hr></td></tr>";
echo "<tr>";
echo "<td>Productos</td>";
echo "<td align='center'><a href='vercarrito.php'>";
echo "<img src='../img/carro.png' width='35' height='35' alt='Ver Carrito'/>(".$contar.")</a></td>";
echo "</tr>";
echo "<tr><td colspan='2'><hr></td></tr>";

while($filas=mysqli_fetch_array($consulta)){
	echo "<tr>";
	echo "<td>";
	echo  "sku:".$filas['idProductos']."<br>";
	echo "Nombre:".$filas['nombre']."<br>";
	echo "Cantidad Disponible:".$filas['cantidad']."<br>";
	echo $filas['descripcion']."<br>";
	echo "<img src='../img/".$filas['imagen']."' width='300' height='200' /><br>";
	echo "$".$filas['precio']."<br>";
	echo "</td>";
	echo "<td>";

	//Voy a validar que aparezca UN solo icono.
	//El icono verde si el item NO esta en el carrito
	//El icono rojo si el item SI esta en el carrito
//	if(!$carro || !isset($carro[md5($filas['idproductos'])]['identificador']) || $carro[md5($filas['idproductos'])]['identificador']!=md5($filas['idproductos']))
//	{
	echo "<a href='addcarrito.php?id=".$filas['idProductos']."'><img src='../img/add.png' width='75' height='75' alt='agregar al Carrito' /></a>";
//	}
//	else
//	{
	echo "<a href='dellcarrito.php?id=".$filas['idProductos']."'><img src='../img/quitar.png' width='75' height='75' alt='Quitar del Carrito' /></a>";
//	}
	echo "</td>";
	echo "</tr>";
}
echo "<tr><td colspan='2'><hr></td></tr>";
echo "</table>";
mysqli_close($conexion);
?>
</body>
</html>
