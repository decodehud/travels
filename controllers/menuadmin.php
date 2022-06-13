<?php
//Activar el uso de sesiones
session_start();
require('validaadmin.php');
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
    <title>Admin | travels</title>
</head>

<body>

    <div class="py-6 bg-oceans">
        <div class="container">

            <div class="container">
                <div class="row">



                    <h2 class="display-1 text-center pb-2">Bienvenido Admin! </h2>

                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card body -->
                        <div class=" card-body">
                            <span class="fs-6 text-uppercase fw-semi-bold">USUARIOS</span>
                            <div class="mt-2 d-flex justify-content-between align-items-center">
                                <div class="lh-1">
                                    <h2 class="h1 fw-bold mb-1">1,200</h2>
                                    <span>Registrados en la base de datos </span>
                                </div>
                                <div>
                                    <span class="bg-light-primary icon-shape icon-xl rounded-3 text-dark-primary"><i class="mdi mdi-text-box-multiple mdi-24px"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card Body -->
                        <div class=" card-body">
                            <span class="fs-6 text-uppercase fw-semi-bold">CONTACTOS</span>
                            <div class="mt-2 d-flex justify-content-between align-items-center">
                                <div class="lh-1">
                                    <h2 class="h1 fw-bold mb-1">367</h2>
                                    <span>Registrados en la base de datos </span>
                                </div>
                                <div>
                                    <span class="bg-light-warning icon-shape icon-xl rounded-3 text-dark-warning"><i class="mdi mdi-folder-multiple-image mdi-24px"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card Body -->
                        <div class=" card-body">
                            <span class="fs-6 text-uppercase fw-semi-bold">ENCUESTAS</span>
                            <div class="mt-2 d-flex justify-content-between align-items-center">
                                <div class="lh-1">
                                    <h2 class="h1 fw-bold mb-1">234</h2>
                                    <span>Registrados en la base de datos </span>
                                </div>
                                <div>
                                    <span class="bg-light-success icon-shape icon-xl rounded-3 text-dark-success"><i class="mdi mdi-account-multiple mdi-24px"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card Body -->
                        <div class=" card-body">
                            <span class="fs-6 text-uppercase fw-semi-bold">PRODUCTOS</span>
                            <div class="mt-2 d-flex justify-content-between align-items-center">
                                <div class="lh-1">
                                    <h2 class="h1 fw-bold mb-1">2,300</h2>
                                    <span>Registrados en la base de datos </span>
                                </div>
                                <div>
                                    <span class="bg-light-success icon-shape icon-xl rounded-3 text-dark-success"><i class="mdi mdi-account-multiple mdi-24px"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="  col-lg-8 ">
                    <div class="row">

                        <div class=" col-lg-4 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 shadow">

                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="text-inherit text-center">CONTACTANOS</h3>
                                    <p>Generar un reporte de los contactos ingresados por el usuario </p>
                                    <div class="d-grid gap-2  btn -lg">
                                        <a href="../admin/tbcontact.php" class=" btn pink-btn">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-lg-4 col-md-6 col-12">

                            <div class="card mb-4 shadow">

                                <div class="card-body">
                                    <h3 class="text-inherit text-center">ENCUESTA</h3>
                                    <p>Generar un reporte de las encuentas ingresados por el usuario</p>
                                    <div class="d-grid gap-2  btn -lg">
                                        <a href="../admin/tbencuesta.php" class=" btn pink-btn">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-lg-4 col-md-6 col-12">

                            <div class="card mb-4 shadow">

                                <div class="card-body">
                                    <h3 class="text-inherit text-center">PRODUCTO</h3>
                                    <p>Genere reporte de nuevos productos nuevos productos de clientes </p>
                                    <div class="d-grid gap-2  btn -lg">
                                        <a href="../admin/tbproduct.php" class="btn pink-btn">Generar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-5 col-12 mt-6 mt-md-0">

                    <div class="col-lg-10 col-md-6 col-12">
                        <div class="card mb-4 shadow ">

                            <div class="card-body">
                                <h3 class="text-center">USUARIOS</h3>

                                <p>Generar un reporte completo de usuarios que se encuentran registrados y almacenados en la base de datos</p>

                                <div class="d-grid gap-2  btn -lg">
                                    <a href="../admin/tbusuarios.php" class="btn pink-btn">Usuarios</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-6 col-12">
                        <div class="card mb-4 shadow ">

                            <div class="card-body">
                                <h3 class="text-center">PRODUCTO</h3>

                                <p>Generar un reporte completo de los nuevos productos ingresados por el usuario que se encuentran en la base de datos</p>

                                <div class="d-grid gap-2  btn -lg">
                                    <a href="/"><a class=" btn pink-btn">Generar</a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require('../views/footer.php');
?>