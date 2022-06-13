<?php
session_start();
require('../controllers/validacliente.php');

require('../controllers/listar.php');
require('../views/theme.php');
require('../clientes/nav-cliente.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisar | Pedidos</title>
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
                                <a href="menucliente.php"> <i class="uil uil-corner-up-left"></i></a>
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

                                    <form action="../admin/createPedido.php" method="POST">

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
                                            <label class="form-label" for="pais">Pais</label>
                                            <input type="text" id="pais" class="form-control" placeholder="El salvador" required name="pais">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="correo">Alojamiento</label>
                                            <input type="text" id="alojamiento" class="form-control" required name="alojamiento">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="correo">Fecha Viaje</label>
                                            <input type="date" id="fecha" class="form-control" required name="fechaViaje">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="mensaje">Descripcion</label>
                                            <textarea class="form-control" id="descripcion" rows="5" placeholder="Your description..." required name="descripcion"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="selectOne">Estado de compra</label>
                                            <select class="form-select" name="estado">

                                                <option value="Pendiente">Pendiente</option>
                                                <option value="Pagado">Pagado</option>
                                                <option value="Cancelado">Cancelado</option>

                                            </select>
                                        </div>

                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div><br>

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
                                    <th scope="row">Precio</th>
                                    <th scope="row">Pais</th>
                                    <th scope="row">Alojamiento</th>
                                    <th scope="row">Fecha de Viaje</th>
                                    <th scope="row">Descripcion</th>
                                    <th scope="row">Estado</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                while ($row = mysqli_fetch_array($resultadoProducto)) { ?>

                                    <tr>
                                        <td nowrap><?= $row['idProductos'] ?> </td>
                                        <td nowrap><?= $row['nombre'] ?></td>
                                        <td nowrap><?= $row['precio'] ?> </td>
                                        <td nowrap><?= $row['pais'] ?> </td>
                                        <td nowrap><?= $row['alojamiento'] ?> </td>
                                        <td nowrap><?= $row['fechaViaje'] ?> </td>
                                        <td nowrap><?= $row['descripcion'] ?> </td>
                                        <td nowrap><?= $row['estado'] ?> </td>

                                        <td nowrap>
                                            <a href="detailsProduct.php?id=<?= $row["idProductos"] ?>" class="btn btn-light btn-sm">Details</a>

                                            <button href="updateProduct.php?id=<?= $row["idProductos"] ?>" class="btn btn-warning btn-sm" disabled="">Edit</button>

                                            <a href="../clientes/deleteProducto.php?id=<?= $row["idProductos"] ?>" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="../clientes/compras.php" class="btn btn-info btn-xm"><i class="uil uil-file-download-alt"></i></a>
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