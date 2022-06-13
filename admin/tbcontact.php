<?php
session_start();
require('../controllers/validaadmin.php');

require('../controllers/listar.php');
require('../views/theme.php');
require('../views/nav-login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mantenimiento | Contactos</title>
</head>

<body>


    <div class="p-3">
        <div class="card shadow">
            <div class="row p-4">
                <div class="row">


                    <div class="col-lg-6 col-md-6 col-12 mt-3 mt-lg-0">
                        <form class="d-flex align-items-center ">
                            <span class="position-absolute ps-3">
                                <i class="uil uil-search"></i>
                            </span>
                            <!-- input  -->
                            <input type="search" class="form-control ps-6 border-0 py-3 smooth-shadow-md" placeholder="Search keyword" id="search">
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mt-3 mt-lg-0 p-2 ">
                        <form>
                            <button type="button" class="btn btn-warning btn-lg pl-4 opacity-75">
                            <a href="../controllers/menuadmin.php"> <i class="uil uil-corner-up-left"></i></a>
                            </button>
                            <button type="button" class="btn btn-warning btn-lg opacity-75" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="uil uil-plus"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-lg opacity-75">
                                <i class="uil uil-arrow-to-bottom"></i>
                            </button>

                        </form>
                    </div>
                    <!-- modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelOne" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body"><i class="uim uim-multiply"></i><i class="uim uim-multiply"></i>
                                            
                                        <form action="submitContact.php" method="POST">
                                                <div class=" row">
                                                    <form class="row">

                                                        <div class="mb-3 col-12 col-md-6">
                                                            <label class="form-label" for="nombre">Nombre</label>
                                                            <input type="text" class="form-control" id="nombre" minlength="5" maxlength="10" required pattern="[A-Za-z0-9]+" placeholder=" First Name" name="nombre">

                                                        </div>

                                                        <div class="mb-3 col-12 col-md-6">
                                                            <label class="form-label" for="apellido">Apellido</label>
                                                            <input type="text" class="form-control" id="apellido" minlength="4" maxlength="10" required pattern="[A-Za-z0-9]+" placeholder=" First Name" name="apellido">
                                                        </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="asunto" class="form-label">Asunto
                                                    </label>

                                                    <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Informacion sobre viajes a suecia!" required name="asunto">
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="telefono">Telefono</label>
                                                    <input type="text" id="telefono" class="form-control" minlength="8" maxlength="10" required pattern="[0-9]+" placeholder="+503 8827-9235" name="telefono">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="correo">Correo</label>
                                                    <input type="email" id="correo" class="form-control" placeholder="desarollo_web@webinar.com.sv" required name="correo">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="pais">Pais</label>
                                                    <input type="text" id="pais" class="form-control" placeholder="El salvador" required name="pais">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="mensaje">Mensaje</label>
                                                    <textarea class="form-control" id="mensaje" rows="5" placeholder="Your Mensaje here..." spellcheck="false" minlength="10" required name="mensaje"></textarea>
                                                </div>

                                                <div class="d-grid gap-2">
                                                    <button class=" btn btn-primary" type="submit" value="enviar">Enviar</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                    <div class="table-responsive">
                        <table class="table table-hover table-sm" id="table">
                            <thead>
                                <tr>
                                    <th scope="row">#</th>
                                    <th scope="row">Nombre</th>
                                    <th scope="row">Apellido</th>
                                    <th scope="row">Asunto</th>
                                    <th scope="row">Telefono</th>
                                    <th scope="row">Correo</th>
                                    <th scope="row">Mensaje</th>
                                    <th scope="row">Fecha de mensaje</th>
                                    <th scope="row">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                while ($row = mysqli_fetch_array($resultadoContacto)) { ?>

                                    <tr>
                                        <td nowrap><?= $row['idContacto'] ?> </td>
                                        <td nowrap><?= $row['nombre'] ?></td>
                                        <td nowrap><?= $row['apellido'] ?> </td>
                                        <td nowrap><?= $row['asunto'] ?> </td>
                                        <td nowrap><?= $row['telefono'] ?> </td>
                                        <td nowrap><?= $row['correo'] ?> </td>
                                        <td nowrap><?= $row['mensaje'] ?> </td>
                                        <td nowrap><?= $row['fechaContacto'] ?> </td>

                                        <td nowrap>
                                            <a href="detailsContact.php?id=<?= $row["idContacto"] ?>" type="button" class="btn btn-light btn-sm">Details</a>

                                            <a href="updateContact.php?id=<?= $row["idContacto"] ?>" type="button" class="btn btn-warning btn-sm">Edit</a>

                                            <a href="deleteContact.php?id=<?= $row["idContacto"] ?>" class="btn btn-danger btn-sm">Delete</a>

                                        </td>
                                    </tr>

                                <?php }
                                ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/buscador.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/theme.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
require('../views/footer.php');
?>