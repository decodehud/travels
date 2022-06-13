<?php
session_start();
require('../controllers/validaadmin.php');

require('editUser.php');
require('../views/theme.php');

?>
<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <div class="card shadow">
                <div class="card-body p-6">
                    <div class="mb-4">

                        <form action="updateUser.php?id=<?= $row['idUsuario'] ?>" method="POST">

                            <div class="row">
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="fname">Nombre</label>
                                    <input name="nombre" type="text" class="form-control" value="<?= $row['nombre'] ?>">
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lname">Apellido</span></label>
                                    <input name="apellido" type="text" class="form-control" value="<?= $row['apellido']; ?>">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario</span></label>
                                <input name="usuario" type="text" class="form-control" value="<?= $row['usuario'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="selectOne">Rol</label>
                                <select class="form-select" name="tipocliente">
                                    <option selected>Selecione</option><br>
                                    <option value="admin">Administrator</option>
                                    <option value="cliente">Client</option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input name="correo" type="email" class="form-control" value="<?= $row['correo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Pais</label>
                                <input name="pais" type="text" class="form-control" value="<?= $row['pais'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefono</span>
                                </label>
                                <input name="telefono" type="text" class="form-control" value="<?= $row['telefono'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="contrasena" disabled class="form-control" value="<?= $row['fechaRegistro'] ?>">
                            </div>

                            <div class="d-grid gap-2">
                                <button class=" btn pink-btn" type="submit" value="actualizar" name="update">Actualizar</button>
                            </div>

                        </form>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="../admin/tbusuarios.php" class=" btn btn-warning" type="submit" value="actualizar" name="update">Regresar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<script src="views/js/scripts.js"></script>