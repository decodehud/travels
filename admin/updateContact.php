<?php
session_start();
require('../controllers/validaadmin.php');

require('editContact.php');
require('../views/theme.php');

?>

<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <div class="card shadow">
                <div class="card-body p-6">
                    <div class="mb-4">

                        <form action="updateContact.php?id=<?= $row['idContacto'] ?>" method="POST">
                            <div class=" row">
                                <form class="row">

                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="<?= $row['nombre'] ?>">

                                    </div>

                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="apellido">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" disabled value="<?= $row['apellido'] ?>">
                                    </div>
                            </div>

                            <div class="mb-3">
                                <label for="asunto" class="form-label">Asunto</label>

                                <input type="text" id="asunto" class="form-control" name="asunto" disabled value="<?= $row['asunto'] ?>">
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="telefono">Telefono</label>
                                <input type="text" id="telefono" class="form-control" name="telefono" disabled value="<?= $row['telefono'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="correo">Correo</label>
                                <input type="email" id="correo" class="form-control" name="correo" disabled value="<?= $row['correo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="pais">Pais</label>
                                <input type="text" id="pais" class="form-control" name="pais" disabled value="<?= $row['pais'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="pais">Fecha de contacto</label>
                                <input type="text" id="pais" class="form-control" name="pais" disabled value="<?= $row['fechaContacto'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="mensaje">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="5" name="mensaje" disabled><?= $row['mensaje'] ?></textarea>
                            </div>


                            <div class="d-grid gap-2">
                                <input class=" btn btn-primary" type="submit" value="Actualizar" name="update"></input>
                            </div>

                        </form>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="../admin/tbcontact.php" class=" btn btn-warning" type="submit" value="actualizar" name="update">Regresar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>