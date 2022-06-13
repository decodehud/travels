<?php
//Activar sesiones
session_start();

if(isset($_POST['usuario'])||isset($_POST['contrasena'])){
	//Cargar la conexion
	require('conexion.php');
	//Capturar los datos del formulario
	$usr=$_POST['usuario'];
	$pas=$_REQUEST['contrasena'];

	$sql="SELECT * FROM usuario WHERE usuario='$usr' AND contrasena='$pas' AND estado='A'";
	$resultado=mysqli_query($conexion,$sql);
	$existe=mysqli_num_rows($resultado);
	if($existe>0){
		echo 'usuario existe';
		$registro=mysqli_fetch_array($resultado);
		echo '<br>';
		echo 'Bienvenido '.$registro['nombre'].' '.$registro['apellido'];
		echo '<br>Eres un '.$registro['tipocliente'];
		$codigo=$registro['idUsuario'];
		//Creo las variables de sesion
		$_SESSION['vsCodigo']=$registro['idUsuario'];
		$_SESSION['vsApellido']=$registro['apellido'];
		$_SESSION['vsNombre']=$registro['nombre'];
		$_SESSION['vsTipo']=$registro['tipocliente'];
		$_SESSION['vsCorreo']=$registro['correo'];

		if($registro['tipocliente']=='cliente')	{
			header('location:menucliente.php');
			
		}
		else{
			header('location:menuadmin.php');
		}
	}
	else{
		echo 'usuario no valido';
		header('location:../sign-in.php');
	}
}else{
	header('location:../sign-in.php');
}
?>