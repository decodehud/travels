<?php
//Activar el uso de sesiones
session_start();
require('validacliente.php');
require('../views/theme.php');
require('../clientes/nav-cliente.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travels | Productos y servicios</title>
    <link rel="shortcut icon" href=".png">
    <meta itemprop="name" content="Segundo avance desarrollo de la plataforma web | travels">
    <meta itemprop="description" content="Primer avance de proyecto para desarrollo de la plataforma web, un diseño interactivo simplificado: basado y diseñado con boostrap 5.">

</head>

<body class="bg-oceans">

    <div class="pt-md-14 pt-12">
        <div class="container">
            <!-- Hero Section -->
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12">
                    <div class="mb-xl-0 text-center">
                        <!-- Caption -->
                        <h1 class="display-2 ls-sm fw-bold">Request Access
                            for Product </h1>
                        <p class="mb-6 h2 text-muted px-md-8">
                        Suscribite a nuestro boletin para acceder a precios exclusivos y ganar puntos para tus próximos viajes con Pasaporte Despegar
                        </p>
                        <!-- Form -->
                        <form class="row px-lg-16 px-md-14">
                            <div class="mb-3 col-md-8 col-12 ps-md-0">
                                <input type="email" class="form-control" placeholder="Work Email" required="">
                            </div>
                            <!-- button -->
                            <div class="d-grid mb-3 col-md-4 col-12 ps-md-0">
                                <button class="btn btn-dark" type="submit">Request Access</button>
                            </div>
                            <h1 class="display-2 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Build Better</span> <span class="headingTyped text-primary">Future</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true">|</span>
            </h1>
                        </form>

                    </div>
                </div>
                <!-- col -->
                <div class="offset-xl-1 col-xl-10 col-12 ">
                    <div class="card bg-gradient-mix-shade px-md-5 pt-md-5 px-4
              rounded-3">
                     
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
<?php

require('./views/footer.php');

?>