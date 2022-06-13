<?php
//Activar el uso de sesiones
session_start();
require('listar.php');
require('conexion.php');
require('validacliente.php');
require('../views/theme.php');
require('../clientes/nav-cliente.php');

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | travels</title>
</head>



<div class="container">
    <div class="container card shadow p-4">
        <div class="row">

            <?php
            $totalfilas = mysqli_num_rows($consulta);
            echo "<table border='0'>";
            echo "<tr>";
            echo "<td>&nbsp;</td>";
            echo "<td align='right'>Total Productos: " . $totalfilas . "</td>";
            echo "</tr>";
            echo "<tr><td colspan='2'><hr></td></tr>";
            echo "<tr>";
            echo "<td>Productos</td>";
            echo "<td align='center'><a href='vercarrito.php'>";
            echo "<img src='../img/carro.png' width='35' height='35' alt='Ver Carrito'/>(" . $contar . ")</a></td>";
            echo "</tr>";
            echo "<tr><td colspan='2'><hr></td></tr>";


            while ($row = mysqli_fetch_array($resultadoProducto)) { ?>
            
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="card mb-4 shadow">
                        <a href="#" class="card-img-top">

                            <img src="../img/ludovico-lovisetto-CnlPgC2xAog-unsplash.jpg" class="card-img-top rounded-top-md" alt=""></a>

                        <div class="card-body">
                            <a href="#" class="fs-5 mb-2 fw-semi-bold d-block text-success"><?php echo $row['pais']; ?></a>

                            <h3><a href="#" class="text-inherit">
                                    <?php echo $row['nombre']; ?>
                                </a>
                            </h3>
                            <a href="#" class="fs-5 mb-2 fw-semi-bold d-block text-warning"><?php echo $row['precio']; ?></a>
                            <?php

                            echo $row['descripcion'];
                            ?>

                            <div class="d-grid gap-2 pt-3">
                                <a href="addcarrito.php?id=<?= $row["idProductos"] ?>" class="btn btn-primary" type="button">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php }
            ?>
        </div>
    </div>
</div>