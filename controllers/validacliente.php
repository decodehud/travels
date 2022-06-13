<?php
if(!isset($_SESSION['vsCodigo'])){
	header('location:../sign-in.php');
}
if($_SESSION['vsTipo']!='cliente'){
	header('location:../sign-in.php');
}
?>