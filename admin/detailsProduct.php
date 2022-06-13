<?php
session_start();
require('../controllers/validaadmin.php');
require('../controllers/conexion.php');
require('../views/theme.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_update = " SELECT * FROM productos WHERE idProductos = $id";

    $result = mysqli_query($conexion, $sql_update);
    $row = mysqli_fetch_array($result);
}
?>

<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <div class="card shadow">

                <div class="card-body p-6">

                    <div class="card-body mb-4">
                        <div class="text-center">
                            <img src="../img/img/douglas-bg.jpg" class="avatar avatar-xl mb-3" alt="">

                            <h4 class="mb-1"><?= $row['nombre'] ?> <?= $row['apellido'] ?></h4>
                            <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i><?= $row['pais'] ?></p>

                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Codigo del producto</span>
                            <span class="text-dark"><?= $row['idProductos'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Nombre del producto</span>
                            <span class="text-dark"><?= $row['nombre'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Precio del producto</span>
                            <span class="text-dark"><?= $row['precio'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>pais de alojamiento</span>
                            <span class="text-dark"><?= $row['pais'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Fecha de viaje</span>
                            <span class="text-dark"><?= $row['fechaViaje'] ?></span>
                        </div><br>

                        <div class="mb-3 fs-6">
                            <span>Descripcion</span>
                            <textarea class="form-control" id="descripcion" rows="5"><?= $row['descripcion'] ?></textarea>
                        </div>

                        <div class="d-flex  border-bottom"> 
                        </div>

                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Estado</span>
                            <span class="text-dark"><?= $row['estado'] ?></span>
                        </div>

                    </div>

                    <div class="d-grid gap-2">
                        <a href="../admin/tbproduct.php" class=" btn btn-warning" type="submit" value="detalles" name="details">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>