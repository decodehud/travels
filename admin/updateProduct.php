<?php
session_start();
require('../controllers/validaadmin.php');

require('editProduct.php');
require('../views/theme.php');

?>

<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <div class="card shadow">
                <div class="card-body p-6">
                    <div class="mb-4">

                        <form action="editProduct.php?id=<?= $row['idProductos'] ?>" method="POST">
                            <div class=" row">
                                <form class="row">

                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $row['nombre'] ?>">

                                    </div>

                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="apellido">precio</label>
                                        <input type="text" class="form-control" id="precio" name="precio" value="<?= $row['precio'] ?>">
                                    </div>
                            </div>

                            <div class="mb-3">
                                <label for="asunto" class="form-label">Pais</label>

                                <input type="text" id="pais" class="form-control" name="pais" value="<?= $row['pais'] ?>">
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="alojamiento">Alojamiento</label>
                                <input type="text" id="alojamiento" class="form-control" name="alojamiento" value="<?= $row['alojamiento'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="fechaViaje">Fecha de viaje</label>
                                <input type="date" id="fechaViaje" class="form-control" name="fechaViaje" value="<?= $row['fechaViaje'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="descripcion">Descripcion del producto</label>
                                <textarea class="form-control" id="descripcion" rows="5" name="descripcion"><?= $row['descripcion'] ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="selectOne">Estado de compra</label>
                                <select class="form-select" name="estado">
                                    <option selected>Selecione</option><br>
                                    <option value="Pendiente">Pendiente</option>
                                    <option value="Pagado">Pagado</option>
                                    <option value="Cancelado">Cancelado</option>

                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <input class=" btn btn-primary" type="submit" value="Actualizar" name="update"></input>
                            </div>

                        </form>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="../admin/tbproduct.php" class=" btn btn-warning" type="submit" value="actualizar" name="update">Regresar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>