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
    <title>Sign up | travels</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="mb-4">

                            <h1 class="mb-1 fw-bold">Sign up</h1>
                            <span>Already have an account?
                                <a href="sign-in.php" class="ms-1">Sign in</a></span>
                        </div>
                        <!-- Form -->
                        <form action="controllers/sign-up.php" method="POST">
                            <!-- Username -->
                            <div class=" row">
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="fname">Nombre</label>
                                    <input name="nombre" id="fname" type="text" class="form-control" placeholder="First name" required>
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lname">Apellido</label>
                                    <input name="apellido" id="lname" type="text" class="form-control" placeholder="Last name" required>
                                </div>
                            </div>
                            <!-- username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" id="username" class="form-control" name="usuario" placeholder="Username " required="">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="email" id="email" class="form-control" name="correo" placeholder="Email " required="">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Pais</label>
                                <input name="pais" type="text" class="form-control" placeholder="El salvador">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefono</label>
                                <input type="text" id="phone" class="form-control" name="telefono" placeholder="77778888" required="">
                            </div>
                            <!-- Password -->
                            <div class="mb-3 password-field">
                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="contrasena" class="form-control">
                                </div>
                                <div class="row align-items-center g-0">
                                    <div class="col-6">
                                        <span data-bs-toggle="tooltip" data-placement="right" title="" data-bs-original-title="Test it by typing a password in the field below. To reach full strength, use at least 6 characters, a capital letter and a digit, e.g. 'Test01'">Password
                                            strength
                                            <i class="fas fa-question-circle ms-1"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck">
                                    <label class="form-check-label" for="agreeCheck"><span>I agree to the <a href="#">Terms of
                                                Service </a>and
                                            <a href="#">Privacy Policy.</a></span></label>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Create Free Account
                                    </button>
                                </div>
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