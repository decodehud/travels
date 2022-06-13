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
    <title>Mantenimiento | Usuarios</title>
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

                                    <form action="sign-up.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label class="form-label" for="fname">Nombre</label>
                                                <input name="nombre" type="text" class="form-control">
                                            </div>

                                            <div class="mb-3 col-12 col-md-6">
                                                <label class="form-label" for="lname">Apellido</span></label>
                                                <input name="apellido" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Usuario</span></label>
                                            <input name="usuario" type="text" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="correo" class="form-label">Correo</label>
                                            <input name="correo" type="email" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="correo" class="form-label">Pais</label>
                                            <input name="pais" type="text" class="form-control">
                                        </div>


                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Telefono</span>
                                            </label>
                                            <input name="telefono" type="text" class="form-control">
                                        </div>

                                        <div class="mb-3 password-field">
                                            <label class="form-label" for="newpassword">Password</label>
                                            <input id="newpassword" type="contrasena" name="contrasena" class="form-control mb-2" placeholder="" required="">
                                            <div class="row align-items-center g-0">
                                                <div class="col-6">
                                                    <span data-bs-toggle="tooltip" data-placement="right" title="" data-bs-original-title="Test it by typing a password in the field below. To reach full strength, use at least 6 characters, a capital letter and a digit, e.g. 'Test01'">Password
                                                        strength
                                                        <i class="fas fa-question-circle ms-1"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- upload img -->
                                        <!-- <div class="mb-3">
                                            <div class="fallback">
                                                <input type="file" id="file" name="archivos" multiple />
                                                
                                            </div>
                                        </div> -->

                                        <div class="d-grid gap-2">
                                            <button class=" btn pink-btn" type="submit" value="enviar">Register</button>
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
                                    <th scope="row">Usuario</th>
                                    <th scope="row">Correo</th>
                                    <th scope="row">Rol</th>
                                    <th scope="row">Telefono</th>                       
                                    <th scope="row">Pais</th>
                                    <th scope="row">Fecha de registro</th>
                                    <th scope="row">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                while ($row = mysqli_fetch_array($resultadoUsuario)) { ?>

                                    <tr>
                                        <td nowrap><?= $row['idUsuario'] ?> </td>
                                        <td nowrap><?= $row['nombre'] ?></td>
                                        <td nowrap><?= $row['apellido'] ?> </td>
                                        <td nowrap><?= $row['usuario'] ?> </td>
                                        <td nowrap><?= $row['correo'] ?> </td>                          
                                        <td nowrap><?= $row['tipocliente'] ?> </td>                             
                                        <td nowrap><?= $row['telefono'] ?> </td>
                                        <td nowrap><?= $row['pais'] ?> </td>    
                                        <td nowrap><?= $row['fecha'] ?> </td>

                                        <td nowrap>
                                            <a href="detailsUser.php?id=<?= $row["idUsuario"] ?>" type="button" class="btn btn-light btn-sm">Details</a>
                                            <a href="updateUser.php?id=<?= $row["idUsuario"] ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="deleteUser.php?id=<?= $row["idUsuario"] ?>" type="button" class="btn btn-danger btn-sm">Delete</a>

                                            <!-- <a href="delete.php?id=<?= $row["idUsuario"] ?>" class="btn btn-success btn-sm">Add</a> -->

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