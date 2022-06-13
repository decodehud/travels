<?php

require('./views/theme.php');
require('./views/nav.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | travels</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow ">
                    <!-- Card body -->
                    <div class="card-body p-6">

                        <form action="controllers/contactus.php" method="POST">
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
                                <textarea class="form-control" id="mensaje"  rows="5" placeholder="Your Mensaje here..." spellcheck="false" minlength="10" required name="mensaje"></textarea>
                            </div>


                            <div class="d-grid gap-2">
                                <button class=" btn btn-primary" type="submit" value="enviar">Enviar</button>
                            </div>

                        </form>


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