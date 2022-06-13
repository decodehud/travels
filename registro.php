<?php

require('js/scripts.php');
require('js/nav.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro | Travels</title>
</head>

<body>

    <h1 class="display-1 text-center">Registro</h1>

    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-6 col-md-8 py-8 py-xl-0">
                <div class="card shadow">
                    <div class="card-body p-6">

                        <form action="components/registro.php" method="POST">

                            <div class=" row">
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="fname">Nombre<span class="text-danger">*</span></label>
                                    <input name="nombre" type="text" class="form-control">
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lname">Apellido<span class="text-danger">*</span></label>
                                    <input name="apellido" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario<span class="text-danger">*</span></label>
                                <input name="usuario" type="text" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo<span class="text-danger">*</span></label>
                                <input name="correo" type="email" class="form-control">
                            </div>


                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefono <span class="text-danger">*</span>
                                </label>
                                <input name="telefono" type="text" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="password">Password<span class="text-danger">*</span></label>
                                <input type="password" name="contrasena" class="form-control">
                            </div>


                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck" required>
                                    <label class="form-check-label" for="agreeCheck"><span>I agree to the <a href="#">Terms of
                                                Service </a>and
                                            <a href="#">Privacy Policy.</a></span></label>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button class=" btn pink-btn" type="submit" value="enviar">Register</button>
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
require('js/footer.php');

?>